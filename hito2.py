import random

clientes = {}  
productos = [
    {"id": 1, "nombre": "Producto A", "precio": 10},
    {"id": 2, "nombre": "Producto B", "precio": 20},
    {"id": 3, "nombre": "Producto C", "precio": 30}
]

def registrar_cliente():
    print("Registra un nuevo cliente:")
    nombre = input("Escribe nombre y un apellido: ")
    direccion = input("Dirección: ")
    telefono = input("Número de teléfono: ")
    correo = input("Correo electrónico: ")
    
    
    id_cliente = str(random.randint(1000, 9999))  
    
    clientes[id_cliente] = {
        "nombre": nombre,
        "direccion": direccion,
        "Numero de telefono": telefono,
        "correo": correo
    }
    
    print(f"Cliente registrado con éxito. ID de cliente: {id_cliente}")
    
def realizar_compra():
    id_cliente = input("Ingresa tu ID de cliente: ")
    
    if id_cliente not in clientes:
        print("El cliente no existe.")
        return
    
    
    print("Estos son nuestros productos disponibles:")
    for producto in productos:
        print(f"{producto['id']}. {producto['nombre']} - {producto['precio']}")
    
    
    productos_seleccionados = []
    total = 0
    
    while True:
        producto_id = int(input("Ingresa el producto por su numero o 0 para terminar: "))
        
        if producto_id == 0:
            break
        
        cantidad = int(input("Cantidad: "))
        
        producto = next((p for p in productos if p['id'] == producto_id), None)
        
        if producto:
            productos_seleccionados.append({"producto": producto['nombre'], "cantidad": cantidad, "precio": producto['precio']})
            total += producto['precio'] * cantidad
        else:
            print("El producto no existe.")
    
    numero_pedido = str(random.randint(10000, 99999))
    
    print("Este es el resumen de tu compra:")
    print(f"Cliente: {clientes[id_cliente]['nombre']}")
    for item in productos_seleccionados:
        print(f"{item['cantidad']} x {item['producto']} - {item['precio']} cada uno")
    print(f"Este es el total: {total}")
    print(f"Este es tu numero de pedido: {numero_pedido}")
    
def seguimiento_compra():
    numero_pedido = input("Ingresa tu número de pedido para el seguimiento: ")
    print("Se está desarrollando tu seguimiento del pedido.")

def menu():
    while True:
        print("Menú:")
        print("1. Registrar un cliente")
        print("2. Realizar una compra")
        print("3. Seguimiento de la compra")
        print("4. Salir")
        
        opcion = input("Seleccione una opción: ")
        
        if opcion == "1":
            registrar_cliente()
        elif opcion == "2":
            realizar_compra()
        elif opcion == "3":
            seguimiento_compra()
        elif opcion == "4":
            print("Gracias por trabajar con nosotros, hasta la proxima.")
            break
        else:
            print("La opcion no sirve, intentalo otra vez.")
menu()


