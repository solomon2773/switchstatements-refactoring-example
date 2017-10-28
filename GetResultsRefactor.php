<?php
/**
 * Created by IntelliJ IDEA.
 * User: solomontsao
 * Date: 10/28/17
 * Time: 6:15 AM
 */
namespace switchstatements;

class GetResultsRefactor
{
    public function GetResults($type="SearchResults")
    {
        $results = null;
        $searchResultClass = new SearchResultList();
        $favoriteResultClass = new FavoritesResultList();
        $wishlistResultClass = new WishlistResultList();
        ///// new Christmas List
        $christmaslistResultClass = new ChristmasResultList();
        switch ($type)
        {
            case "SearchResults":
                $results = $searchResultClass->GetSearchResults();
            break;
            case "Favorites":
                $results = $favoriteResultClass->GetFavoriteResults();
            break;
            case "WishList":
                $results = $wishlistResultClass->getWishlistResults();
            break;
            case "ChristmasList":
                $results = $christmaslistResultClass->getChristmasResults();
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