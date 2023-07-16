<div class="card bg-base-300 m-4">
    <div class="card-body">
        <div class="card-title">
            <h2>Welcome</h2>
        </div>
        <p>
            Welcome to the magical realm of "Guess the Gathering"! Prepare to embark on a whimsical journey where your
            intuition will be put to the test. In this enchanted website, you shall unravel the secrets of the majestic
            Magic: The Gathering cards. Are you ready to wield the power of guessing?
        </p>

        @if ($visible === true)
            <p>
                Rule number one, dear adventurer: Colorful choices shall earn you abundant points! Within each card lies
                a spectrum of hues, ranging from the fiery red of passion to the tranquil blue of wisdom. If you possess
                the keen eyes of a seasoned wizard and manage to divine the card's colors accurately, rejoice! Ten
                points shall be bestowed upon you, rewarding your mystical intuition!
            </p>
            <p>
                But wait, there's more! Brace yourself for the second challenge, where the realm of mana shall reveal
                its secrets. With every flicker of mana, magic unfolds. Will you tap into the correct well of power? It
                is your task, dear challenger, to unravel the enigma of the card's mana value. Be it a humble one or a
                colossal seven, if you foresee the correct number, an additional ten points shall dance into your
                magical score.
            </p>
            <p>
                Remember, brave soul, this journey is not for the faint-hearted! The mystical words and elusive names
                shall be your guide. Through the haze of descriptions and titles, you must summon your inner oracle to
                conquer the mysteries that lie before you. Trust your instincts, harness your wit, and seize the chance
                to claim the coveted twenty points of glory!
            </p>
            <p>
                Oh, and do not fret if you stumble upon the path to enlightenment. Even if your guesses go astray, fear
                not, for laughter is our ally! Throughout your enchanting escapade, the magical muse shall sprinkle
                amusing comments and witty banter, bringing joy to your quest.
            </p>
            <p>
                So, gather your courage, harness your imagination, and prepare to immerse yourself in the fantastical
                universe of "Guess the Gathering"! The rewards await those who dare to test their wits and unravel the
                essence of these magnificent cards. May the stars align in your favor as you embark on this
                extraordinary adventure!
            </p>
        @endif

        <div class="card-actions justify-end">
            <button class="btn btn-primary btn-outline" wire:click="toggle">
                @if ($visible === true)
                    Hide rules
                @else
                    Show rules
                @endif
            </button>
        </div>
    </div>
</div>
