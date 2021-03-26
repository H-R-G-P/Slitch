<?php


class Helper
{
    /**
     * Comparing values of arrays in lower case
     * @param array $array1
     * @param array $array2
     * @param array $array3
     * @return array
     */
    public static function array_diff_inLowercase(array $array1, array $array2, array $array3) : array
    {
        $output = [];
        foreach ($array1 as $value) {
            $value = preg_replace('/-/', '\-', $value);
            if (count(preg_grep('/'.$value.'/i', $array2)) === 0 &&
                count(preg_grep('/'.$value.'/i', $array3)) === 0)
            {
                $output[] = preg_replace('/\\\-/', '-', $value);
            }
        }
        return $output;
    }

    public static function array_uniqueCaseInsensitive(array $array) : array
    {
        $values = [];
        foreach ($array as $value) {
            if (count(preg_grep('/^'.$value.'$/i', $values)) !== 1)
            {
                $values[] = $value;
            }
        }
        return $values;
    }

    /**
     * Simple page redirect
     * @param string $page Format: {controller}/{method}
     */
    public static function redirect(string $page) : void
    {
        header('location: '.URLROOT.'/'.$page);
    }

    /**
     * Return true if some user is logged in otherwise false
     * @return bool
     */
    public static function isLoggedIn() : bool
    {
        if (isset($_SESSION['user_id']))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Flash message helper
     * @param string $name
     * @param string $message
     * @param string $class
     * @example flash('register_success', 'You are now registered', 'alert alert-danger');<br>
     * DISPLAY IN VIEW - echo flash('register_success');
     */
    public static function flash(string $name = '', string $message = '', string $class = 'alert alert-success') : void
    {
        if (!empty($name))
        {
            if (!empty($message) && empty($_SESSION[$name]))
            {
                if (!empty($_SESSION[$name]))
                {
                    unset($_SESSION[$name]);
                }

                if (!empty($_SESSION[$name.'_class']))
                {
                    unset($_SESSION[$name.'_class']);
                }

                $_SESSION[$name] = $message;
                $_SESSION[$name.'_class'] = $class;
            }
            elseif (empty($message) && !empty($_SESSION[$name]))
            {
                $class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : '';
                echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
                unset($_SESSION[$name]);
                unset($_SESSION[$name.'_class']);
            }
        }
    }
}