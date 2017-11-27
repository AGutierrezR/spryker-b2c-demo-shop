<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Tests\Behat\Gherkin\Keywords;

use Behat\Gherkin\Keywords\ArrayKeywords;
use Behat\Gherkin\Node\StepNode;

class ArrayKeywordsTest extends KeywordsTest
{

    protected function getKeywords()
    {
        return new ArrayKeywords($this->getKeywordsArray());
    }

    protected function getKeywordsArray()
    {
        return [
            'with_special_chars' => [
                'and' => 'And/foo',
                'background' => 'Background.',
                'but' => 'But[',
                'examples' => 'Examples|Scenarios',
                'feature' => 'Feature|Business Need|Ability',
                'given' => 'Given',
                'name' => 'English',
                'native' => 'English',
                'scenario' => 'Scenario',
                'scenario_outline' => 'Scenario Outline|Scenario Template',
                'then' => 'Then',
                'when' => 'When',
            ],
        ];
    }

    protected function getSteps($keywords, $text, &$line, $keywordType)
    {
        $steps = [];
        foreach (explode('|', $keywords) as $keyword) {
            if (false !== mb_strpos($keyword, '<')) {
                $keyword = mb_substr($keyword, 0, -1);
            }

            $steps[] = new StepNode($keyword, $text, [], $line++, $keywordType);
        }

        return $steps;
    }

}
