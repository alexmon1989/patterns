<?php

/**
 *
 * Шаблон "Фабричный метод". Используется для создания объектов различных типов одним интерфейсом.
 *
 * + Создание объектов, независимо от их типов и сложности процесса создания.
 *
 * - Даже для одного объекта необходимо создать соответствующую фабрику, что увеличивает код.
 * - Необходимость создавать наследника CommsManager для каждого нового формата.
 */

abstract class ApptEncoder {
  abstract function encode();
}

/**
 * Class BloggsApptEncoder
 *
 * Кодирует данные в формат BloggsCal
 */
class BloggsApptEncoder extends ApptEncoder {
    public function encode()
    {
        return "Данные закодированы в формате BloggsCal";
    }
}

class MegaApptEncoder extends ApptEncoder {
    public function encode()
    {
        return "Данные закодированы в формате Mega";
    }
}

abstract class CommsManager {
  abstract function getHeaderText();      
  abstract function getApptEncoder();
  abstract function getFooterText();
}

/**
 * Class BloggsCommsManager
 *
 * Отвечает за генерацию объектов BloggsApptEncoder
 */
class BloggsCommsManager extends CommsManager {
    public function getHeaderText()
    {
        return "BloggsCal верхний колонтитул";
    }

    /**
     * Фабричный метод.
     *
     * @return BloggsApptEncoder
     */
    public function getApptEncoder()
    {
        return new BloggsApptEncoder();
    }

    public function getFooterText()
    {
        return "BloggsCal нижний колонтитул";
    }
}

/**
 * Class BloggsCommsManager
 *
 * Отвечает за генерацию объектов MegaApptEncoder
 */
class MegaCommsManager extends CommsManager {
    public function getHeaderText()
    {
        return "Mega верхний колонтитул";
    }

    /**
     * Фабричный метод.
     *
     * @return MegaApptEncoder
     */
    public function getApptEncoder()
    {
        return new MegaApptEncoder();
    }

    public function getFooterText()
    {
        return "Mega нижний колонтитул";
    }
}
