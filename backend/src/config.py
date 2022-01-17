import os	
PWD = os.path.abspath(os.curdir)	
DEBUG = True
SQLALCHEMY_DATABASE_URI = 'mysql://root:root@localhost/gestion_mascotas'
SQLALCHEMY_TRACK_MODIFICATIONS = False
