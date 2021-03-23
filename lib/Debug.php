<?php
/**
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░                                                                                                                                           ░
 * ░     ████████╗███████╗██████╗░███████╗████████╗░█████╗░    ░█████╗░██╗░░░░░███████╗██╗░░██╗░█████╗░███╗░░██╗██████╗░███████╗██████╗░       ░
 * ░     ╚══██╔══╝██╔════╝██╔══██╗██╔════╝╚══██╔══╝██╔══██╗    ██╔══██╗██║░░░░░██╔════╝╚██╗██╔╝██╔══██╗████╗░██║██╔══██╗██╔════╝██╔══██╗       ░
 * ░     ░░░██║░░░█████╗░░██████╔╝█████╗░░░░░██║░░░███████║    ███████║██║░░░░░█████╗░░░╚███╔╝░███████║██╔██╗██║██║░░██║█████╗░░██████╔╝       ░
 * ░     ░░░██║░░░██╔══╝░░██╔══██╗██╔══╝░░░░░██║░░░██╔══██║    ██╔══██║██║░░░░░██╔══╝░░░██╔██╗░██╔══██║██║╚████║██║░░██║██╔══╝░░██╔══██╗       ░
 * ░     ░░░██║░░░███████╗██║░░██║███████╗░░░██║░░░██║░░██║    ██║░░██║███████╗███████╗██╔╝╚██╗██║░░██║██║░╚███║██████╔╝███████╗██║░░██║       ░
 * ░     ░░░╚═╝░░░╚══════╝╚═╝░░╚═╝╚══════╝░░░╚═╝░░░╚═╝░░╚═╝    ╚═╝░░╚═╝╚══════╝╚══════╝╚═╝░░╚═╝╚═╝░░╚═╝╚═╝░░╚══╝╚═════╝░╚══════╝╚═╝░░╚═╝       ░
 * ░                                                                                                                                           ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░      █████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗       ░
 * ░      ╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝       ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░                                                                                                                                           ░
 * ░        ░██╗░░░░░░░██╗░██╗░░░░░░░██╗░██╗░░░░░░░██╗░░░████████╗███████╗██████╗░███████╗████████╗░█████╗░░░░██████╗░███████╗██╗░░░██╗        ░
 * ░        ░██║░░██╗░░██║░██║░░██╗░░██║░██║░░██╗░░██║░░░╚══██╔══╝██╔════╝██╔══██╗██╔════╝╚══██╔══╝██╔══██╗░░░██╔══██╗██╔════╝██║░░░██║        ░
 * ░        ░╚██╗████╗██╔╝░╚██╗████╗██╔╝░╚██╗████╗██╔╝░░░░░░██║░░░█████╗░░██████╔╝█████╗░░░░░██║░░░███████║░░░██║░░██║█████╗░░╚██╗░██╔╝        ░
 * ░        ░░████╔═████║░░░████╔═████║░░░████╔═████║░░░░░░░██║░░░██╔══╝░░██╔══██╗██╔══╝░░░░░██║░░░██╔══██║░░░██║░░██║██╔══╝░░░╚████╔╝░        ░
 * ░        ░░╚██╔╝░╚██╔╝░░░╚██╔╝░╚██╔╝░░░╚██╔╝░╚██╔╝░██╗░░░██║░░░███████╗██║░░██║███████╗░░░██║░░░██║░░██║██╗██████╔╝███████╗░░╚██╔╝░░        ░
 * ░        ░░░╚═╝░░░╚═╝░░░░░╚═╝░░░╚═╝░░░░░╚═╝░░░╚═╝░░╚═╝░░░╚═╝░░░╚══════╝╚═╝░░╚═╝╚══════╝░░░╚═╝░░░╚═╝░░╚═╝╚═╝╚═════╝░╚══════╝░░░╚═╝░░░        ░
 * ░                                                                                                                                           ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 *
 * See COPYING.txt for license details.
 * Copyright © 2020 Tereta Alexander. All rights reserved.
 * Contacts:
 *     tereta@mail.ua
 *     www.tereta.dev
 */

namespace Tereta;

use Exception;

/**
 * Class Debug
 */
class Debug
{
    /**
     * @var self
     */
    protected static $self;

    /**
     * @var string
     */
    protected $file;

    /**
     * @return Debug
     */
    public static function init()
    {
        if (static::$self) {
            return static::$self;
        }
        return static::$self = new self;
    }

    /**
     * @param string $file
     * @return $this
     */
    public function setFile(string $file): self
    {
        if (static::isStatic()) {
            static::init()->setFile($file);
            return;
        }

        $this->file = $file;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFile(): ?string
    {
        if (static::isStatic()) {
            static::init()->getFile();
            return;
        }

        if (!$this->file) {
            $this->file = realpath(__DIR__ . '/..') . '/var/php_debugger.log';
        }

        return $this->file;
    }

    /**
     * @param string|null $label
     */
    public function trace(?string $label = null)
    {
        if (static::isStatic()) {
            static::init()->trace($label);
            return;
        }

        $string = '';
        if ($label) {
            $string .= $label . " :\n";
        }
        try {
            throw new Exception;
        } catch (Exception $e) {
            $string .= $e->getTraceAsString();
        }

        $this->writeLn($string);
    }

    /**
     * @param $var
     * @param int $deepArray
     */
    public function dump($var, $deepArray = 3): void
    {
        if (static::isStatic()) {
            static::init()->dump($var, $deepArray);
            return;
        }

        $this->write("Variable : " . $this->varDumpTransform($var, $deepArray) . "\n");
    }

    /**
     * @param $var
     * @param int $deepArray
     * @param string $spaces
     * @return string
     */
    protected function varDumpTransform($var, int $deepArray = 0, string $spaces = ''): string
    {
        $string = "";
        if (in_array(gettype($var), ['integer'])) {
            $string .= '(' . gettype($var) . ') ' . $var;
        } elseif (in_array(gettype($var), ['integer', 'string'])) {
                $string .= '(' . gettype($var) . ') "' . $var . '"';
        } elseif (in_array(gettype($var), ['null'])) {
            $string .= '(' . gettype($var) . ')';
        } elseif (in_array(gettype($var), ['object'])) {
            $string .= '(' . gettype($var) . ') ' . get_class($var) . " [\n";
            $currentSpaces = $spaces . '    ';
            foreach (get_class_vars(get_class($var)) as $key => $item) {
                if ($deepArray > 0) {
                    $string .= $currentSpaces . 'var : ' . $key . " => ...\n";
                } else {
                    $string .= $currentSpaces . 'var : ' . $key . ' => ' . $this->varDumpTransform($item, $deepArray - 1) . "\n";
                }
            }
            foreach (get_class_methods($var) as $key => $item) {
                $string .= $currentSpaces . 'method : ' . $item . "(...)\n";
            }
            $string .= $spaces . "]\n";
        } elseif (in_array(gettype($var), ['array']) && $deepArray > 0) {
            $string .= '(' . gettype($var) . ') [' . "\n";
            $currentSpaces = $spaces . '    ';
            foreach ($var as $key => $item) {
                if (is_string($key)) {
                    $key = '"' . $key . '"';
                }
                $string .= $currentSpaces . $key . ' => ' . $this->varDumpTransform($item, $deepArray - 1, $currentSpaces) . "\n";
            }
            $string .= ']';
        } elseif (in_array(gettype($var), ['array'])) {
            $string .= '(' . gettype($var) . ') [...]';
        } else {
            $string .= '(' . gettype($var) . ") ...";
        }

        return $string;
    }

    /**
     * @param string $string
     */
    public function writeLn(string $string): void
    {
        if (static::isStatic()) {
            static::init()->writeLn($string);
            return;
        }

        $this->write($string . "\n");
    }

    /**
     * @param string $string
     */
    public function write(string $string): void
    {
        if (static::isStatic()) {
            static::init()->write($string);
            return;
        }

        file_put_contents($this->getFile(), $string, FILE_APPEND);
    }

    /**
     * @return bool
     */
    protected static function isStatic() {
        $backtrace = debug_backtrace();
        return $backtrace[1]['type'] == '::';
    }
}