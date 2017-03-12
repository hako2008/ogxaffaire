<?php
namespace App\lib;
use App\Category;


class MyFunctions {


        public function fetchCategoryTree($relatedto = 0, $string = '', $user_tree_array = '')
                {
                     

                    if (!is_array($user_tree_array))
                        $user_tree_array = array();

                    $childs = Category::where('relatedto', $relatedto)->orderBy('id')->get();
                    
                    if ($childs->count() > 0)
                    {
                        foreach ($childs as $child)
                        {
                            $user_tree_array[] = array("id" => $child->id, "name" => $string . $child->name);
                            $user_tree_array = $this->fetchCategoryTree($child->id, $string . '&nbsp;&nbsp;&nbsp;&nbsp;', $user_tree_array);
                        }
                    }
                    return $user_tree_array;
                }

        public function SplitWhitespace($string = '')
                {
                     
                    $i = substr_count($string, '&nbsp;');
                    $ArrayString = array();

                    if($i > 0)
                    {
                        $ArrayString[] = substr($string, 0, ($i*6));
                        $ArrayString[] = substr($string, ($i*6));
                    }
                    else
                    {
                        $ArrayString[] = "";
                        $ArrayString[] = $string;
                    }

                    return $ArrayString;
                }
    }

?>