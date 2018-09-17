# Dica
a = [1,2,3]
b = a
c = list(a)
print(a == b)
print(a is b)
print(a)
print(b)
a.append(5)
print(b)
print(a == c)
print(a is c)