# 🛒 Sistema de Punto de Venta (POS)

<div align="center">

# 💳 Punto de Venta Web

### Sistema de Gestión Comercial desarrollado con PHP y MySQL

<p align="center">

![PHP](https://img.shields.io/badge/PHP-8+-777BB4?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap)
![JavaScript](https://img.shields.io/badge/JavaScript-ES6-F7DF1E?style=for-the-badge&logo=javascript)
![License](https://img.shields.io/badge/License-MIT-success?style=for-the-badge)

</p>

</div>

---

# 📌 Descripción

**Sistema de Punto de Venta (POS)** es una aplicación web desarrollada en **PHP y MySQL** diseñada para administrar de forma eficiente las operaciones comerciales de pequeños y medianos negocios.

El sistema permite gestionar ventas, productos, clientes, proveedores, compras, inventario, usuarios y reportes desde una interfaz intuitiva, facilitando el control total del negocio en tiempo real.

---

# 🚀 Características Principales

## 💰 Ventas

- Registro de ventas.
- Ventas rápidas.
- Ticket de compra.
- Cálculo automático del total.
- Aplicación de descuentos.
- Cálculo de cambio.
- Cancelación de ventas.
- Historial de ventas.
- Consulta de ventas por fecha.

---

## 📦 Inventario

- Alta de productos.
- Edición de productos.
- Eliminación de productos.
- Control de existencias.
- Actualización automática del stock.
- Alertas por inventario bajo.
- Códigos de barras.
- Productos por categoría.

---

## 👥 Clientes

- Registro de clientes.
- Edición de información.
- Historial de compras.
- Consulta rápida.
- Clientes frecuentes.
- Búsqueda por nombre o teléfono.

---

## 🚚 Proveedores

- Registro de proveedores.
- Información de contacto.
- Historial de compras.
- Gestión de pedidos.

---

## 🛍 Compras

- Registro de compras.
- Entrada de mercancía.
- Actualización automática del inventario.
- Historial de compras.
- Gestión de facturas.

---

## 👨‍💼 Usuarios

- Inicio de sesión.
- Recuperación de contraseña.
- Administración de usuarios.
- Roles y permisos.
- Cajeros.
- Administradores.
- Supervisores.

---

## 📊 Reportes

- Reporte diario.
- Reporte semanal.
- Reporte mensual.
- Productos más vendidos.
- Ventas por usuario.
- Ganancias.
- Productos agotados.
- Estadísticas del negocio.

---

## 💳 Métodos de Pago

- Efectivo.
- Tarjeta.
- Transferencia bancaria.
- Pago mixto.
- Crédito.

---

## 🔔 Notificaciones

- Inventario bajo.
- Productos agotados.
- Nuevas ventas.
- Compras registradas.

---

# 🛠️ Tecnologías Utilizadas

- PHP 8
- MySQL
- HTML5
- CSS3
- Bootstrap 5
- JavaScript
- AJAX
- jQuery
- Apache
- XAMPP / WAMP / Laragon

---

# 📂 Estructura del Proyecto

```text
SistemVenta/
│
├── assets/
│   ├── css/
│   ├── js/
│   ├── img/
│   └── icons/
│
├── config/
│   ├── conexion.php
│   ├── database.php
│   └── config.php
│
├── controllers/
│   ├── ProductoController.php
│   ├── VentaController.php
│   ├── ClienteController.php
│   ├── UsuarioController.php
│   └── CompraController.php
│
├── models/
│   ├── Producto.php
│   ├── Cliente.php
│   ├── Usuario.php
│   ├── Venta.php
│   └── Compra.php
│
├── views/
│   ├── dashboard/
│   ├── productos/
│   ├── ventas/
│   ├── compras/
│   ├── clientes/
│   ├── usuarios/
│   └── reportes/
│
├── includes/
│   ├── header.php
│   ├── sidebar.php
│   ├── navbar.php
│   └── footer.php
│
├── database/
│   └── puntoventa.sql
│
├── login.php
├── logout.php
├── dashboard.php
├── index.php
└── README.md
```

---

# ⚙️ Instalación

## 1. Clonar el repositorio

```bash
git clone https://github.com/isaireyesp1/SistemVenta.git
```

## 2. Entrar al proyecto

```bash
cd SistemVenta
```

## 3. Copiar el proyecto al servidor local

Mover la carpeta al directorio:

**XAMPP**

```text
htdocs/
```

**Laragon**

```text
www/
```

---

## 4. Crear la base de datos

Ingresar a **phpMyAdmin** y crear una base de datos:

```sql
puntoventa
```

Importar el archivo:

```text
database/puntoventa.sql
```

---

## 5. Configurar la conexión

Editar el archivo:

```php
config/database.php
```

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "puntoventa";
```

---

## 6. Ejecutar el proyecto

Abrir el navegador:

```text
http://localhost/SistemVentas
```

---

# 🔐 Seguridad

- Inicio de sesión seguro.
- Contraseñas cifradas.
- Control de sesiones.
- Protección contra SQL Injection.
- Validación de formularios.
- Control de permisos por rol.
- Protección de rutas privadas.

---

# 📈 Funcionalidades Futuras

- 📄 Facturación electrónica.
- 🧾 Generación de tickets PDF.
- 📱 Aplicación móvil.
- 📊 Dashboard interactivo.
- ☁️ Respaldo automático.
- 📷 Escaneo de códigos QR.
- 📦 Gestión de múltiples sucursales.
- 🔔 Notificaciones por correo.
- 💳 Integración con terminal bancaria.
- 📈 Inteligencia de negocios.
- 🌙 Modo oscuro.
- 🌍 Multiidioma.

---

# 📊 Módulos del Sistema

| Módulo | Estado |
|---------|:------:|
| Inicio de sesión | ✅ |
| Dashboard | ✅ |
| Ventas | ✅ |
| Compras | ✅ |
| Inventario | ✅ |
| Clientes | ✅ |
| Proveedores | ✅ |
| Usuarios | ✅ |
| Reportes | ✅ |
| Configuración | ✅ |

---

# 🤝 Contribuciones

Las contribuciones son bienvenidas.

1. Haz un **Fork** del proyecto.
2. Crea una nueva rama.

```bash
git checkout -b feature/nueva-funcionalidad
```

3. Realiza tus cambios.

```bash
git commit -m "Nueva funcionalidad"
```

4. Envía los cambios.

```bash
git push origin feature/nueva-funcionalidad
```

5. Abre un **Pull Request**.

---

# 📜 Licencia

Este proyecto está distribuido bajo la licencia **MIT**, permitiendo su uso, modificación y distribución con fines educativos y comerciales.

---

# 👨‍💻 Desarrollador

**Isai Reyes - FullStack Developer**

Desarrollado como un **Sistema Web de Punto de Venta (POS)** utilizando **PHP**, **MySQL**, **Bootstrap** y **JavaScript**, siguiendo una arquitectura modular y buenas prácticas de desarrollo para ofrecer una solución eficiente en la administración de negocios.

---

<div align="center">

# 💳 Sistema de Punto de Venta

### Gestión Inteligente para tu Negocio

**Ventas • Inventario • Clientes • Reportes • Administración**

⭐ ¡Si este proyecto te resulta útil, no olvides darle una estrella en GitHub!

</div>
