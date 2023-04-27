<?
// namespace Nordic\Core;
// ПЛИТКА НА ГЛАВНОЙ ,КЛАСС вкл его на главной и вы

// extends расширяем фунционал, НАСЛЕДУЕМ от класса Unit
// implements реализуем интерфес
class Advantages extends Unit implements ShowArticleInfo
{
    // переопределение метода полиморфизм,  пишим название таблицы ,переопределили метода из unita
    public function setTable(){
        return 'offers';
    }
    
    // реализуем из интерфейса
    public function photo(){
        return $this->getField('pic');
    }

    public function title(){
        return $this->getField('header');
    }

    public function description(){
        return $this->getField('text');
    }
}
?>