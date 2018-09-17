# -*- coding: utf-8 -*-
"""

Classes em Python

"""


class Celular:
    def __init__(self, nome=None):
        self.nome = ""
        if nome is not None:
            self.nome = nome
        self.numero = 1234

    def set_numero(self, numero):
        self.numero = numero

    def get_numero(self):
        return self.numero 

    def ligar(self):
        print('ligação feita')

    def desligar(self):
        print('Desliguei')

