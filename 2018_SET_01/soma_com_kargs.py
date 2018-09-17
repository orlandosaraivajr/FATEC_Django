# -*- coding: utf-8 -*-
"""
Encontro dia 15 de setembro de 2018

Função de soma
"""


def soma(*args, **kwargs):
    total = 0
    for numero in args:
        try:
            total = total + numero
        except TypeError:
            pass
    for chave in kwargs:
        print(chave)
        print(kwargs[chave])
        try:
            total = total + kwargs[chave]
        except TypeError:
            pass
    
    return total

assert(soma(1,1) is 2)
assert(soma(1,2) == 3)
assert(soma(3.0, 2.0) == 5.0)
assert(soma(1,2,3) == 6)
assert(soma(1,2,3,4) == 10)
assert(soma(3.0, 2.0, 1.0) == 6.0)
assert(soma(1,2,3,[1,2,3]) == 6)
assert(soma(1,2,3,[1,2,3], n4 = 3) == 9)


