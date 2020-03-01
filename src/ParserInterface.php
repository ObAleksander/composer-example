<?php

namespace aleksandro\parser;


/**
 * @author Oboturov Aleksandr <a.g.oboturov@gmail.com>
 */
interface ParserInterface
{
/**
 * @param string $url
 * @param string $tag
 * @return array
 */
public function process(string $url, string $tag): array;
}
