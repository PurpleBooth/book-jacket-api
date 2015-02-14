<?php

namespace PurpleBooth\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class BooksController
{

    private $bookData = [
        "0345496531" => [
            "title" => "The Dreaming Void",
            "author" => "Peter F. Hamilton",
            "description" => "Reviewers exhaust superlatives when it comes to the science fiction of Peter F. Hamilton. His complex and engaging novels, which span thousands of years–and light-years–are as intellectually stimulating as they are emotionally fulfilling. Now, with The Dreaming Void, the eagerly awaited first volume in a new trilogy set in the same far-future as his acclaimed Commonwealth saga, Hamilton has created his most ambitious and gripping space epic yet.

The year is 3589, fifteen hundred years after Commonwealth forces barely staved off human extinction in a war against the alien Prime. Now an even greater danger has surfaced: a threat to the existence of the universe itself.
At the very heart of the galaxy is the Void, a self-contained microuniverse that cannot be breached, cannot be destroyed, and cannot be stopped as it steadily expands in all directions, consuming everything in its path: planets, stars, civilizations. The Void has existed for untold millions of years. Even the oldest and most technologically advanced of the galaxy’s sentient races, the Raiel, do not know its origin, its makers, or its purpose.

But then Inigo, an astrophysicist studying the Void, begins dreaming of human beings who live within it. Inigo’s dreams reveal a world in which thoughts become actions and dreams become reality. Inside the Void, Inigo sees paradise. Thanks to the gaiafield, a neural entanglement wired into most humans, Inigo’s dreams are shared by hundreds of millions–and a religion, the Living Dream, is born, with Inigo as its prophet. But then he vanishes.

Suddenly there is a new wave of dreams. Dreams broadcast by an unknown Second Dreamer serve as the inspiration for a massive Pilgrimage into the Void. But there is a chance that by attempting to enter the Void, the pilgrims will trigger a catastrophic expansion, an accelerated devourment phase that will swallow up thousands of worlds.

And thus begins a desperate race to find Inigo and the mysterious Second Dreamer. Some seek to prevent the Pilgrimage; others to speed its progress–while within the Void, a supreme entity has turned its gaze, for the first time, outward. . . .",
            "cover" => "/images/866136.jpg",
            "isbn" => "0345496531"
        ],
        "1591024439" => [
            "title" => "Crossover",
            "author" => "Joel Shepherd",
            "description" => "Crossover is the first novel in a series which follows the adventures of Cassandra Kresnov, an artificial person, or android, created by the League, one side of an interstellar war against the more powerful, conservative Federation. Cassandra is an experimental design — more intelligent, more creative, and far more dangerous than any that have preceded her. But with her intellect come questions, and a moral awakening. She deserts the League and heads incognito into the space of her former enemy, the Federation, in search of a new life.

Her chosen world is Callay, and its enormous, decadent capital metropolis of Tanusha, where the concerns of the war are literally and figuratively so many light years away. But the war between the League and the Federation was ideological as much as political, with much of that ideological dispute regarding the very existence of artificial sentience and the rules that govern its creation. Cassandra discovers that even in Tanusha, the powerful entities of this bloody conflict have wound their tentacles. Many in the League and the Federation have cause to want her dead, and Cassandra’s history, inevitably, catches up with her.

Cassandra finds herself at the mercy of a society whose values preclude her own right even to exist. But her presence in Tanusha reveals other fault lines, and when Federal agents attempt to assassinate the Callayan president, she finds herself thrust into the service of her former enemies, using her lethal skills to attempt to protect her former enemies from forces beyond their ability to control. As she struggles for her place and survival in a new world, Cassandra must forge new friendships with old enemies, while attempting to confront the most disturbing and deadly realities of her own existence",
            "cover" => "/images/378724.jpg",
            "isbn" => "1591024439"
        ],
        "0425258114" => [
            "title" => "Perdition",
            "author" => "Ann Aguirre",
            "description" => "WELCOME TO HELL

The prison ship Perdition, a floating city where the Conglomerate’s most dangerous criminals are confined for life, orbits endlessly around a barren asteroid.

Life inside is even more bleak. Hailed as the Dread Queen, inmate Dresdemona “Dred” Devos controls one of Perdition’s six territories, bordered on both sides by would-be kings eager to challenge her claim. Keeping them at bay requires constant vigilance, as well as a steady influx of new recruits to replace the fallen. Survival is a constant battle, and death is the only escape.

Of the newest convicts, only one is worth Dred’s attention. The mercenary Jael, with his deadly gaze and attitude, may be the most dangerous criminal onboard. His combat skill could give her the edge she needs, if he doesn’t betray her first. Unfortunately, that’s what he does best. Winning Jael’s allegiance will be a challenge, but failure could be worse than death…",
            "cover" => "/images/13421230.jpg",
            "isbn" => "0425258114"
        ]

    ];

    public function indexAction()
    {
        return new JsonResponse(array_values($this->bookData));

    }

    public function getAction($isbn)
    {
        if (!array_key_exists($isbn, $this->bookData)) {
            return new JsonResponse(null, 404);
        }

        return new JsonResponse($this->bookData[$isbn]);
    }
}