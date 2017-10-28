<?php
/**
 * Created by IntelliJ IDEA.
 * User: solomontsao
 * Date: 10/28/17
 * Time: 6:15 AM
 */
namespace switchstatements;

class GetResultsRefactorStateStrategyType
{
    public function GetResults($type=0)
    {
        $results = null;
        $searchResultClass = new SearchResultList();
        $favoriteResultClass = new FavoritesResultList();
        $wishlistResultClass = new WishlistResultList();
        ///// new Christmas List
        $christmaslistResultClass = new ChristmasResultList();
        switch ($type)
        {
            case 0:
                $results = $searchResultClass->GetSearchResults();
            break;
            case 1:
                $results = $favoriteResultClass->GetFavoriteResults();
            break;
            case 2:
                $results = $wishlistResultClass->getWishlistResults();
            break;
            case 3:
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