"""
El usuario introduce un valor (1- Piedra|2- Papel|3-Tijera), si no es correcto se volver a pedir de nuevo hasta que se correcta.
La “maquina” generará un valor aleatorio (de 1 a 3) para elegir piedra, papel o tijera. 
Al finalizar, mostrará la opción del usuario y de la máquina e indicará si hemos ganado, perdido o empatado.
"""

#Creamos las variables 
import random 
numero = 0
maquina = 0
contar_maquina = 0
contar_numero = 0

#Creamos el bucle
while True: 
    numero = int(input(f"Seleccione una opcion, 1 piedra, 2 papel, 3 tijera:"))
    maquina = random.randint(1,3)  
    #Damos las instrucciones que tiene que seguir 
    if numero == 1 and maquina == 3:
        contar_numero +=1
        print("Enhorabuena,punto para ti")
    elif numero == 1 and maquina == 2:
        contar_maquina +=1 
        print("Lo siento, punto para mi")
    elif numero == 2 and maquina == 1:
        contar_numero +=1
        print("Enhorabuena, punto para ti")
    elif numero == 2 and maquina == 3:
        contar_maquina +=1
        print("Lo siento, punto para mi")
    elif numero == 3 and maquina == 2:
        contar_numero +=1
        print("Enhorabuena, punto para ti")
    elif numero == 3 and maquina == 1:
        contar_maquina +=1
        print("Lo siento, punto para mi")
    elif numero == 1 and maquina == 1:
        print("Hemos empatado")
    elif numero == 2 and maquina == 2:
        print("Hemos empatado")
    elif numero == 3 and maquina == 3:
        print("Hemos empatado")
    #Terminamos el buble cuando uno de los 2 haya ganado 3 partidas
    if contar_numero == 3:
        print("Enhorabuena, me has ganado")
        break
    elif contar_maquina == 3:
        print("Te he ganado, intentalo otra vez")
        break



















