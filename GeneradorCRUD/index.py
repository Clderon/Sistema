import tkinter as tk
from tkinter import ttk
from generador import generar_crud_blade_desde_sql

def generar_archivos_crud():
    sql = text_sql.get("1.0", tk.END)  # Obtener el SQL ingresado en el Text
    if generar_crud_blade_desde_sql(sql):  # Verificar si la generación de archivos fue exitosa
        # Mostrar mensaje de éxito
        mensaje.config(text="Archivos generados exitosamente", fg="green")
    else:
        # Mostrar mensaje de error si la generación falló
        mensaje.config(text="Error al generar archivos", fg="red")

# Crear la ventana principal
ventana = tk.Tk()
ventana.title("Generador de CRUD")

# Obtener dimensiones de la pantalla
ancho_pantalla = ventana.winfo_screenwidth()
alto_pantalla = ventana.winfo_screenheight()

# Dejar un pequeño espacio en la parte inferior para la barra de tareas
alto_ventana = alto_pantalla - 10

# Establecer el tamaño de la ventana
ventana.geometry(f"{ancho_pantalla}x{alto_ventana}")

# Configurar la distribución de columnas
ventana.columnconfigure(0, weight=1)
ventana.columnconfigure(1, weight=1)
ventana.columnconfigure(2, weight=1)

# Crear y configurar los elementos de la interfaz
label_sql = ttk.LabelFrame(ventana, text="Ingrese el SQL:")
text_sql = tk.Text(label_sql, height=35, width=100)

# Botón para generar migración, modelo y controlador
btn_generar = ttk.Button(ventana, text="Generar", command=generar_archivos_crud)

# Etiqueta para mostrar el mensaje
mensaje = tk.Label(ventana, text="", fg="black")

# Etiqueta para mostrar el mensaje con un tamaño de fuente más grande
mensaje = tk.Label(ventana, text="", fg="black", font=("Arial", 11))

# Ubicar los elementos en la ventana
label_sql.grid(row=0, rowspan=3, column=1, columnspan=2, padx=10, pady=(2, 0), sticky=tk.W)
text_sql.grid(row=1, column=0, padx=10, pady=(0, 5), rowspan=5, sticky="nsew")
mensaje.place(relx=0.45, rely=0.89, anchor=tk.CENTER)

# Utilizar place() para el botón "Generar"
btn_generar.place(relx=0.45, rely=0.85, anchor=tk.CENTER)

# Iniciar el bucle principal
ventana.mainloop()
