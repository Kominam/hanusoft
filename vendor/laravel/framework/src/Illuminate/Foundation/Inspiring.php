<?php

namespace Illuminate\Foundation;

use Illuminate\Support\Collection;

class Inspiring
{
    /**
     * Get an inspiring quote.
     *
     * Taylor & Dayle made this commit from Jungfraujoch. (11,333 ft.)
     *
     * May McGinnis always control the board. #LaraconUS2015
     *
     * @return string
     */
    public static function quote()
    {
        return Collection::make([
            'The most technologically efficient machine that man has ever invented is the book. -  Northrop Frye',
            'Just because something doesn’t do what you planned it to do doesn’t mean it’s useless. - Thomas Edison',
            'It has become appallingly obvious that our technology has exceeded our humanity. - Albert Einstein',
            'One machine can do the work of fifty ordinary men. No machine can do the work of one extraordinary man. -  Elbert Hubbard',
            'Technology is a word that describes something that doesn’t work yet. - Douglas Adams',
            'All this modern technology just makes people try to do everything at once. - Bill Watterson',
            'We are stuck with technology when what we really want is just stuff that works. - Douglas Adams',
            'Humanity is acquiring all the right technology for all the wrong reasons.  R. Buckminster Fuller',
            'It’s supposed to be automatic, but actually you have to push this button. - John Brunner',
            'Books may look like nothing more than words on a page, but they are actually an infinitely complex imaginotransference technology that translates odd, inky squiggles into pictures inside your head. - Jasper Fforde',
            'I think that novels that leave out technology misrepresent life as badly as Victorians misrepresented life by leaving out sex. - Kurt Vonnegut',
            'Technological progress has merely provided us with more efficient means for going backwards. - Aldous Huxley',
            'The human spirit must prevail over technology. - Albert Einstein',
        ])->random();
    }
}
