# -*- coding: utf-8 -*-

class Aluno:
    def __init__(self, nome):
        self.nome = nome

class Professor:
    def __init__(self, nome, materia):
        self.nome = nome
        self.materia = materia

class Sala:
    def __init__(self, professor, alunos):
        self.professor = professor
        self.alunos = alunos

orlando = Professor('Orlando','Django')
aluno1 = Aluno('Aluno 1')
aluno2 = Aluno('Aluno2')
alunos = [aluno1, aluno2]
lab1 = Sala(orlando, alunos)