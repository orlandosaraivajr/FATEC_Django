from django.db import models


class ContatoModel(models.Model):
    nome = models.CharField(max_length=100)
    telefone = models.CharField(max_length=20)
