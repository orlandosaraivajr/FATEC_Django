from django.db import models
from django.db.models import CharField
from django.db.models import DateTimeField

class Anotacoes(models.Model):
    nome = CharField(max_length = 200)
    motivo = CharField(max_length = 200, default='')
    data = DateTimeField()

