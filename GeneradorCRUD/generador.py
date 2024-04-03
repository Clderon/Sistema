import re
import os
from Acciones.index import generar_contenido_listar 
from Acciones.registrar import generar_contenido_registrar
from Acciones.editar import generar_contenido_editar  

# Definir la ruta de la carpeta
# ruta_carpeta = r'C:\laragon\www'
ruta_carpeta = r'C:\laragon\www\sistema\resources\views'

def obtener_atributos_tabla(sql):
    # Utilizamos una expresión regular para encontrar los atributos de la tabla
    patron = r'(\b(?!CREATE|TABLE|PRIMARY\b)\w+)\s+(\w+(\(\d+(,\d+)?\))?)'  # Excluir CREATE y TABLE del patrón
    atributos = re.findall(patron, sql)
    return [atributo[0] for atributo in atributos]  # Devolver solo los nombres de los atributos

def obtener_nombre_tabla(sql):
    # Utilizamos una expresión regular para buscar el nombre de la tabla después de CREATE TABLE
    patron = r'CREATE TABLE (\w+)\s*\('
    coincidencia = re.search(patron, sql)
    if coincidencia:
        return coincidencia.group(1)
    else:
        return None

def generar_crud_blade_desde_sql(sql):
    global ruta_carpeta  # Acceder a la variable global ruta_carpeta
    nombre_tabla = obtener_nombre_tabla(sql)
    if nombre_tabla:
        nombre_carpeta = os.path.join(ruta_carpeta, nombre_tabla.lower())
        
        try:
            os.mkdir(nombre_carpeta)
            print(f'Carpeta "{nombre_carpeta}" creada exitosamente.')
        except FileExistsError:
            print(f'La carpeta "{nombre_carpeta}" ya existe.')

        # Obtener los atributos de la tabla
        atributos_tabla = obtener_atributos_tabla(sql)

        # Generar archivos index, show, store, update y destroy
        nombres_archivos = ["index.blade.php", "registrar.blade.php", "editar.blade.php"]
        for nombre in nombres_archivos:
            nombre_archivo = os.path.join(nombre_carpeta, nombre)
            generar_archivo(nombre_archivo, nombre_tabla, atributos_tabla, nombre)
        return True
    else:
        print("No se pudo encontrar el nombre de la tabla en el comando SQL.")
        return  False
def generar_archivo(nombre_archivo, nombre_tabla, atributos_tabla, tipo_archivo):
    if tipo_archivo == "index.blade.php":
        contenido = generar_contenido_listar(nombre_tabla, atributos_tabla)
    elif tipo_archivo == "registrar.blade.php":
        contenido = generar_contenido_registrar(nombre_tabla, atributos_tabla)
    elif tipo_archivo == "editar.blade.php":
        contenido = generar_contenido_editar(nombre_tabla, atributos_tabla)  # Utilizar la función para editar
    else:
        contenido = ""
    
    with open(nombre_archivo, 'w', encoding='utf-8') as f:
        f.write(contenido)
    print(f'Archivo "{nombre_archivo}" creado exitosamente.')

