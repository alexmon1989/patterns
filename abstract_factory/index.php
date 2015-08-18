<?php

/**
 * Предоставляет интерфейс для создания семейств взаимосвязанных или взаимозависимых объектов,
 * не специфицируя их конкретных классов.
 *
 * + изолирует конкретные классы;
 * + упрощает замену семейств продуктов;
 * + гарантирует сочетаемость продуктов.
 *
 * - сложно добавить поддержку нового вида продуктов.
 *
 */

abstract class ApptEncoder {
    abstract function encode();
}

abstract class TtdEncoder {
    abstract function encode();
}

abstract class ContactEncoder {
    abstract function encode();
}

/**
 * Class BloggsApptEncoder
 *
 * Кодирует данные Appointment в формат BloggsCal
 */
class BloggsApptEncoder extends ApptEncoder {
    public function encode()
    {
        return "Данные Appointment закодированы в формате BloggsCal";
    }
}

/**
 * Class MegaApptEncoder
 *
 * Кодирует данные Appointment в формат Mega
 */
class MegaApptEncoder extends ApptEncoder {
    public function encode()
    {
        return "Данные Appointment закодированы в формате Mega";
    }
}

/**
 * Class BloggsTtdEncoder
 *
 * Кодирует данные Ttd в формат BloggsCal
 */
class BloggsTtdEncoder extends TtdEncoder {
    public function encode()
    {
        return "Данные Ttd закодированы в формате BloggsCal";
    }
}

/**
 * Class MegaTtdEncoder
 *
 * Кодирует данные Ttd в формат Mega
 */
class MegaTtdEncoder extends TtdEncoder {
    public function encode()
    {
        return "Данные Ttd закодированы в формате Mega";
    }
}

/**
 * Class BloggsContactEncoder
 *
 * Кодирует данные Contact в формат BloggsCal
 */
class BloggsContactEncoder extends ContactEncoder {
    public function encode()
    {
        return "Данные Contact закодированы в формате BloggsCal";
    }
}

/**
 * Class MegaContactEncoder
 *
 * Кодирует данные Contact в формат Mega
 */
class MegaContactEncoder extends ContactEncoder {
    public function encode()
    {
        return "Данные Contact закодированы в формате Mega";
    }
}

abstract class CommsManager {
  abstract function getHeaderText();
  abstract function getApptEncoder();
  abstract function getTtdEncoder();
  abstract function getContactEncoder();
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

    /**
     * Фабричный метод.
     *
     * @return BloggsTtdEncoder
     */
    public function getTtdEncoder()
    {
        return new BloggsTtdEncoder();
    }

    /**
     * Фабричный метод.
     *
     * @return BloggsContactEncoder
     */
    public function getContactEncoder()
    {
        return new BloggsContactEncoder();
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

    /**
     * Фабричный метод.
     *
     * @return MegaTtdEncoder
     */
    public function getTtdEncoder()
    {
        return new MegaTtdEncoder();
    }

    /**
     * Фабричный метод.
     *
     * @return MegaContactEncoder
     */
    public function getContactEncoder()
    {
        return new MegaContactEncoder();
    }

    public function getFooterText()
    {
        return "Mega нижний колонтитул";
    }
}
