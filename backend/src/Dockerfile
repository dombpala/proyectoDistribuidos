FROM python:3.9-alpine

WORKDIR /app

COPY . .
# Install dependencies
RUN pip install -r requirements.txt 

CMD ["python", "router.py"]