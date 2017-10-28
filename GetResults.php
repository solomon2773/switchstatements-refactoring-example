<?php
/**
 * Created by IntelliJ IDEA.
 * User: solomontsao
 * Date: 10/28/17
 * Time: 6:15 AM
 */
namespace switchstatements;

class GetResults
{
    public function GetResults($type="SearchResults")
    {
        $results = null;
        switch ($type)
        {
        case "SearchResults":
            //// search product lists.
            /// ///maybe 100 lines of code
            $results = 'return a list of products by searching key words.';
        break;
        case "Favorites":
            //// search product lists.
            /// ///maybe 200 lines of code
            $results = 'return a list of user\'s favorites products.';
        break;
        case "WishList":
            //// search product lists.
            /// ///maybe 300 lines of code
            $results = 'return a list of user\'s whishlist products.';
        break;
        }
        return $results;
    }

    /////another whatever 10k lines of code
    /// asdfsadfsadf
    /// fasdfsadf
    /// sadfasd
    /// dfasdfasdf
    /// asdfasdfasdf
    /// asdfasdfas
    /// asdfasdfasdf
}