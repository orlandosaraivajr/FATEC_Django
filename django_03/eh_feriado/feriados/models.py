from django.db.models import Model, CharField, DateTimeField, EmailField, TextField

class Feriados(Model):
    nome = CharField(max_length=20)
    motivo = CharField(max_length=100, default='')
    data = DateTimeField()