USE gestion_mascotas;

# Inserts persona
INSERT INTO gestion_mascotas.persona (cedula, nombre, apellido, fechaNacimiento, tipo) VALUES 
("0922178323","Rodrigo","Saraguro", NOW(), "voluntario"),
("0923839712","Fabio","Quimi", NOW(), "voluntario"),
("0983028772","Kristel","Pelaez", NOW(), "voluntario"),
("0546278311","Juanito","Alcachofa", NOW(), "donante"),
("0638294834","Franklin","Garcia", NOW(), "donante"),
("0734813642","Gabriela","Vaca", NOW(), "donante"),
("0399178323","Carlos","Pillajo", NOW(), "patrocinador"),
("0923455271","Daniela","Sinchi", NOW(), "patrocinador"),
("0846282304","Alejandro","Vargas", NOW(), "patrocinador");

select * from persona;

# Inserts voluntarios
INSERT INTO gestion_mascotas.voluntario (id_persona, tipo) VALUES
("0922178323", "Cuidador"),
("0923839712", "Veterinario"),
("0983028772", "Cuidador");

select * from voluntario;

# Inserts mascotas
INSERT INTO gestion_mascotas.mascota (nombre, edad, especie) VALUES
("Tetsu",3,"Gato"),
("Kira",8,"Gato"),
("Trueno",5,"Perro"),
("Arthur",6, "Gato");

select * from mascota;

INSERT INTO gestion_mascotas.donacion (fecha, id_donante) VALUES
(NOW(),"0546278311"),
(NOW(),"0638294834"),
(NOW(),"0734813642");

select * from donacion;

INSERT INTO gestion_mascotas.donacion_item (id_donacion, id, descripcion, cantidad) VALUES
(1,1,"Latas de comida de gato",3),
(2,1,"Comida para perro",8),
(3,1,"Vacunas para perros",7);
select * from donacion_item;