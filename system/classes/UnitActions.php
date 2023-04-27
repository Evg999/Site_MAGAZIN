<?php
// namespace Nordic\Interfaces;
// ИНТЕРФЕЙС описывает только действие (методы абстрактный) или константы (getField получить поле)
// для UNIT

// создаём и называем
interface UnitActions{
    // описание только действе, находяться только методы или константы, метод должен быть абстрактным
    public function getField($field); //метод для получения данных полей
}
?>