<?php
/**
 * Created by IntelliJ IDEA.
 * User: solomontsao
 * Date: 10/28/17
 * Time: 6:15 AM
 */
namespace switchstatements;

class GetResultsRefactorStateStrategy
{
    public function GetResults($type="SearchResults")
    {
        $getResultsTypeClass = new GetResultsRefactorStateStrategyType();

        return $getResultsTypeClass->GetResults();
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