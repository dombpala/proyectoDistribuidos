from api import app
import datetime
from flask import request,jsonify
from flask_restful import Resource, Api
from models import Persona, Donacion, Mascota, Adopcion, Voluntario, Donacion_item
from dbconn import session
api = Api(app)


class RouterPersona(Resource):
    def get(self, persona_id):
        p = Persona.query.filter_by(cedula=persona_id).first()
        return {"id":p.cedula,"name":p.nombre,"last_name":p.apellido,"birthdate":p.fechaNacimiento.isoformat(),"type":p.tipo}
    
    def post(self):
        persona = Persona(cedula=request.form["dni"],nombre=request.form["name"],apellido=request.form["last_name"],fechaNacimiento=request.form["birthdate"],tipo=request.form["type"])
        session.add(persona)
        session.commit()

class RouterVoluntarios(Resource):
    def get(self):
        Voluntarios = Persona.query.filter_by(tipo="voluntario").all()
        objetos = []

        for v in Voluntarios:
            voluntario = v.serialize()
            tipo = Voluntario.query.filter_by(id_persona=voluntario["cedula"]).first()
            voluntario["tipo"] = tipo.serialize()["tipo"]
            objetos.append(voluntario)

        return jsonify(objetos)

class RouterPatrocinadores(Resource):
    def get(self):
        Patrocinadores = Persona.query.filter_by(tipo="patrocinador").all()
        return jsonify([p.serialize() for p in Patrocinadores])
    

class RouterDonacion(Resource):
    def get(self, donacion_id):
        d = Donacion.query.filter_by(id=donacion_id).first()
        p = Persona.query.filter_by(cedula=d.id_donante).first()
        return {"id":d.id,"date":d.fecha.isoformat(),"donor":{"id":p.cedula,"name":p.nombre,"last_name":p.apellido,"birthdate":p.fechaNacimiento.isoformat(),"tipo":p.tipo}}

class RouterDonaciones(Resource):
    def get(self):
        Donaciones = Donacion.query.all()
        objetos = []

        for d in Donaciones:
            donacion = d.serialize()
            donante = Persona.query.filter_by(cedula=donacion["id_donante"]).first()
            donante = donante.serialize()
            item = Donacion_item.query.filter_by(id_donacion=donacion["id"]).first()
            item = item.serialize()
            donacion["donante"] = donante["nombre"] +" " + donante["apellido"]
            donacion["descripcion"] = item["descripcion"]
            donacion["cantidad"] = item["cantidad"]
            objetos.append(donacion)

        return jsonify(objetos)


class RouterMascota(Resource):
    def get(self, mascota_id):
        m = Mascota.query.filter_by(id=mascota_id).first()
        return {"id":m.id,"name":m.nombre,"age":m.edad,"specie":m.especie}

    def post(self):
        mascota = Mascota(nombre=request.form["name"],edad=request.form["age"],especie=request.form["specie"])
        session.add(mascota)
        session.commit()

class RouterMascotas(Resource):
    def get(self):
        M = Mascota.query.all()
        m_list = []
        for m in M:
            adoptado = Adopcion.query.filter_by(id_mascota=m.id).first()
            if(not adoptado):
                m_list.append(m.serialize())
        return jsonify(m_list)


class RouterAdopcion(Resource):
    def post(self):
        adopcion = Adopcion(id_duenio=request.form["id_owner"],id_mascota=request.form["id_pet"],fecha=datetime.datetime.now().isoformat())
        persona = Persona.query.get(request.form["id_owner"])
        if(not persona):
            p = Persona(cedula=request.form["id_owner"],nombre=request.form["name"],apellido=request.form["last_name"],fechaNacimiento=request.form["birthday"],tipo="dueño")
            session.add(p)
            session.commit()
        session.add(adopcion)
        session.commit()




api.add_resource(RouterPersona, '/persona/', '/persona/<string:persona_id>')
api.add_resource(RouterDonacion, '/donacion/<string:donacion_id>')
api.add_resource(RouterDonaciones, '/donaciones/')
api.add_resource(RouterVoluntarios, '/voluntarios/')
api.add_resource(RouterPatrocinadores, '/patrocinadores/')
api.add_resource(RouterMascota, '/mascota/', '/mascota/<string:mascota_id>')
api.add_resource(RouterMascotas,'/mascotas/')
api.add_resource(RouterAdopcion, '/adopcion/')

if __name__ == '__main__':
    app.run(debug=True)
