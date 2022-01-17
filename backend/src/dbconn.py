from flask_sqlalchemy import SQLAlchemy
from api import app
import config
app.config.from_object(config)
db = SQLAlchemy(app)
session = db.session
