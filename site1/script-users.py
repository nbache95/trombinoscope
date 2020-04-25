# -*- coding: utf-8 -*-
"""
Created on Fri Apr 24 23:51:20 2020

@author: nbache
"""

    import csv


def getPassword(length):
    """Générer une chaîne aléatoire de longueur fixe"""
    str = string.ascii_lowercase
    return ''.join(random.choice(str) for i in range(length))

def create_users (n, fichier):
    f = open(fichier)
    lignes = readlines(f)
    for i in range (n):
        f.write("\n")
        user = "user" + str(i)
        pas = getPassword(10)
        mail = user+"@gmail.com"
        f.write(user+";"+pas+";"+mail+";")
        print("les utilisateurs ont été créé")

create_users(10, utilisateurs.csv)