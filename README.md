# Proyecto en CodeIgniter 4

## 📋 Procedimientos

### 1. Clonar el repositorio
```
git clone https://github.com/sandro060606/CI4.git
```

### 2. Configurar el archivo .env
```
database.default.hostname = localhost
database.default.database = ci4
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.port     = 3306
```

### 3. Instalar dependencias y migrar la BD
```
composer install
```
```
php spark migrate
```
```
php spark db:seed MasterSeeder -> Crea todas las Semillas
```

### 4. Iniciar el servidor
```
php spark serve
```

### 5. Abrir en el navegador
```
http://localhost:8080
```

## 📁 Estructura del Proyecto
```
app/
├── Config/
│   └── Routes.php
├── Controllers/
│   ├── Cliente.php
│   ├── Proovedor.php
│   └── Producto.php
├── Database/
│   ├── Migrations/
│   │   ├── CrearTablaClientes.php
│   │   ├── CrearTablaProovedores.php
│   │   └── CrearTablaProductos.php
│   └── Seeds/
│       ├── MasterSeeder.php
│       ├── ClientesSeeder.php
│       ├── ProovedoresSeeder.php
│       └── ProductosSeeder.php
├── Models/
│   ├── ClienteModel.php
│   ├── ProovedorModel.php
│   └── ProductoModel.php
└── Views/
    ├── Modulos/
    │   ├── clientes/
    │   │   ├── index.php
    │   │   ├── registrar.php
    │   │   └── actualizar.php
    │   ├── proovedores/
    │   │   ├── index.php
    │   │   ├── registrar.php
    │   │   └── actualizar.php
    │   └── productos/
    │       ├── index.php
    │       ├── registrar.php
    │       └── actualizar.php
    └── Partials/
        ├── header.php
        └── footer.php
```

## 🔄 Comandos útiles
```
php spark migrate                → crea las tablas
php spark db:seed MasterSeeder   → inserta todos los datos de prueba
php spark migrate:refresh        → resetea y vuelve a crear tablas
php spark migrate:refresh --seed → resetea todo + semillas
php spark serve                  → inicia el servidor local
```

## 🛠️ Tecnologías
```
PHP 8+        - Lenguaje de programación
CodeIgniter 4 - Framework MVC
MySQL         - Motor de base de datos
SB Admin 2    - Template de interfaz
Bootstrap 4   - Estilos y componentes UI
jQuery        - Interactividad
```

## 👤 Autor
Sandro Rodriguez Anchante
SENATI - VI Semestre - Seminario III - 2026