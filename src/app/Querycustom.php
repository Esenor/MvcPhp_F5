<?php
namespace app;

/**
 * @author David Dieu <daviddieu80@gmail.com>
 */
abstract class Querycustom
{
    /**
     * @var string query
     */
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    /**
     * @param PDO $context
     *
     * @return array
     */
    public function execute(\PDO $context)
    {
        $result = $context->query($this->query);

        return $result->fetchAll(\PDO::FETCH_OBJ);
    }
}
