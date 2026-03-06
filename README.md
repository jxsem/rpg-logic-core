# ⚔️ RPG Logic Core - PHP Fundamentos

Este es un simulador de combate por turnos desarrollado en **PHP puro**. El proyecto nació como un ejercicio para aplicar de forma real los conceptos del curso de **Fundamentos de PHP**, enfrentando la lógica de programación a un escenario de juego real.

## 🚀 Funcionalidades Actuales
* **Sistema de Entidades**: Uso de arrays asociativos para definir Héroes y Villanos (Vida, Ataque, Defensa).
* **Cálculo de Daño Dinámico**: Función que mitiga el ataque según la defensa del oponente.
* **Control de Estados**: Lógica para evitar que la vida sea negativa (mínimo 0).
* **Bucle de Combate**: Simulación automática hasta que uno de los dos combatientes cae.

## 🛠️ Conceptos Técnicos Aplicados
* **Variables y Tipos de Datos**: Manejo de strings e integers.
* **Arrays Asociativos**: Estructura de datos para personajes.
* **Funciones con Retorno**: Encapsulación de la lógica de ataque.
* **Estructuras de Control**: Uso de `while` para turnos e `if/else` para condiciones de victoria.
* **Operadores Aritméticos y de Asignación**: Gestión de daños y actualización de salud.

## 🕹️ Cómo ejecutarlo
1. Clona el repositorio.
2. Asegúrate de tener PHP instalado (8.0 o superior recomendado).
3. Ejecuta el archivo desde la terminal:
   ```bash
   php index.php
