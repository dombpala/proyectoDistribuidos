FROM python:3.7.10-alpine

COPY . /server
WORKDIR /server

# Install dependencies
RUN pip install -r requirements.txt 

CMD python router.py