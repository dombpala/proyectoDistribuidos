FROM python:3.9-buster

WORKDIR /app

COPY . /app

# Install dependencies
RUN pip install -r requirements.txt 

EXPOSE 5000

ENV FLASK_APP=router.py

CMD ["flask", "run", "--host", "127.0.0.1"]
