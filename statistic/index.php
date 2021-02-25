<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

require('../classes/Processor.php');
require('../classes/Word.php');

use classes\Processor;

if (true) {

    $HP5 = "
        I don't know
        about you, it's too hot today, isn't it?
        
        And it's going to get even worse.
        Temperatures up in the mid-30s Celsius...
        
        ...that's the mid-90s Fahrenheit,
        tomorrow, maybe even hitting 100.
        
        So, please, remember to cover up
        and stay cool...
        
        ...with the hottest hits on your FM dial.
        
        Come on, guys, time to go home.
        
        Come on, love, off you get.
        
        Do we have to?
        Yes, we do.
        
        I'll make you your favorite dinner
        to compensate.
        
        He squealed like a pig, didn't he?
        
        PlERS: Yeah, brilliant punch, Big D.
        Did you see his face?
        
        Hey, Big D.
        
        Beat up another 10-year-old?
        
        - This one deserved it.
        Yeah.
        
        Five against one, very brave.
        - Well, you're one to talk.
        
        Moaning in your sleep every night?
        At least l'm not afraid of my pillow.
        
        'Don't kill Cedric.'
        
        Who's Cedric, your boyfriend?
        
        - Shut up.
        'He's going to kill me, Mum.'
        
        Where is your mum?
        
        Where is your mum, Potter?
        
        She dead?
        
        Is she dead?
        
        Is she a dead Pott-?
        
        Whoa.
        
        Dudley.
        Dudley, let's go.
        
        - What's going on?
        - What are you doing?
        
        - l'm not doing anything.
        We're getting out of here, Dudley.
        
        Come on, Dudley, hurry up.
        
        Dudley, run.
        
        Expecto Patronum.
        
        Mrs. Figg.
        
        Don't put away your wand, Harry.
        
        They might come back.
        
        Dementors in Little Whinging,
        whatever next?
        
        - Whole world's gone topsy-turvy.
        - l don't understand. How do you know-?
        
        Dumbledore asked me
        to keep an eye on you.
        
        Dumbledore asked you?
        You know Dumbledore?
        
        Uh-huh.
        
        After You-Know-Who
        killed that poor Diggory boy last year...
        
        ...did you expect him to let you
        go wandering on your own?
        
        Good Lord, boy.
        They told me you were intelligent.
        
        Now, get inside and stay there.
        
        Expect someone will be in touch soon.
        
        Whatever happens, don't leave the house.
        
        It is hot. That's right, hot everywhere.
        
        There's sweat. There's stifling.
        
        Diddykins?
        
        Is that you?
        
        Duddy. Vernon, come quick.
        
        We're going to have to
        take him to a hospital.
        
        Who did this to you, boy?
        
        Happy, are we, now? Eh?
        
        You've finally done it.
        You've finally driven him loopy.
        
        Vernon, don't say that.
        
        Well, just look at him, Petunia.
        Our boy has gone yumpy.
        
        I've reached my limit, do you hear?
        
        This is the last l'm gonna take
        of you and your nonsense.
        
        VERNON WHIMPERING]
        
        - Dear Mr. Potter.
        What?
        
        The Ministry has received intelligence
        that at 6:23 this evening...
        
        ...you performed the Patronus Charm
        in the presence of a Muggle.
        
        As a clear violation...
        
        ...of the Decree for the Reasonable
        Restriction of Underage Sorcery...
        
        ...you are hereby expelled...
        
        ...from Hogwarts School
        of Witchcraft and Wizardry.
        
        Hoping you are well, Mafalda Hopkirk.
        
        Justice.
        
        He's not very well.
        
        Sorry, Hedwig.
        
        WOMAN
        Very clean, these Muggles.
        
        Tonks, for God's sake.
        Unnatural.
        
        Professor Moody.
        
        - What are you doing here?
        - Rescuing you, of course.
        
        But where are we going?
        The letter said l've been expelled.
        
        You haven't been. Not yet.
        Kingsley, you take point.
        
        - But the letter said-
        - Dumbledore persuaded the minister...
        
        ...to suspend your expulsion,
        pending a formal hearing.
        
        - A hearing?
        Uh-huh.
        
        Don't worry. We'll explain everything
        when we get back to headquarters.
        
        Shh! Not here, Nymphadora.
        
        Don't call me Nymphadora.
        
        Stay in formation, everyone.
        Don't break ranks if one of us is killed.
        
        Come on, you, around the corner.
        
        In you go, son.
        
        There've been no sightings.
        
        No deaths. No proof.
        
        SlRlUS: He almost killed Harry.
        If that isn't proof enough...
        
        Yes, but guarding
        you-know-what is the most important...
        
        We must trust Dumbledore on this.
        
        SlRlUS:
        Was he able to protect Harry last year?
        
        Well, tonight l say
        it's time to take action.
        
        Ooh!
        
        Cornelius Fudge is a politician
        first and a wizard second.
        
        - His instinct would be to ignore it-
        Shh. Keep your voices down.
        
        Heavens, you're all right.
        
        Bit peaky, but I'm afraid dinner will wait
        until after the meeting's finished.
        
        Nope. No time to explain.
        Straight upstairs, first door on the left.
        
        Yeah.
        
        Mudblood, werewolves, traitors, thieves.
        
        If my poor mistress
        knew the scum they let into her house...
        
        ...what would she say to old Kreacher?
        
        Oh, the shame.
        
        Freaks.
        There, there, mistress.
        
        Scum ofthe earth.
        Not like it was in the days of my fathers.
        
        Oh, Harry.
        
        Are you all right? We overheard them
        talking about the Dementor attack.
        
        And this hearing at the Ministry.
        It's just outrageous.
        
        I've looked it up.
        They simply can't expel you.
        
        - lt's completely unfair.
        - Yeah.
        
        There's a lot of that
        going round at the moment.
        
        So, what is this place?
        
        - lt's headquarters.
        - Of the Order of the Phoenix.
        
        It's a secret society.
        
        We wanted to write, mate.
        Really, we did.
        
        - Only...
        - Only what?
        
        Only Dumbledore made us swear
        not to tell you anything.
        
        I'm the one who saw Voldemort return...
        
        ...the one who fought him,
        who saw Cedric Diggory get killed.
        
        Harry.
        - Thought we heard your dulcet tones.
        
        Don't bottle it up,
        though, mate. Let it out.
        
        If you're all done shouting...
        
        SlRlUS
        If anyone has a right to know, it's Harry.
        
        If it wasn't for Harry, we wouldn't
        even know Voldemort was back.
        
        He's not a child, Molly.
        
        But he's not an adult either.
        
        - He's not James, Sirius.
        SlRlUS: Well, he's not your son.
        
        He's as good as.
        
        - who else has he got?
        Hey, Ginny.
        
        Perhaps Potter will grow up to be a felon,
        just like his godfather.
        
        SlRlUS:
        Now, you stay out of this, Snivellus.
        
        - Snape's part of the Order?
        - Git.
        
        SlRlUS:
        - about your supposed reformation.
        
        - l know better.
        So why don't you tell him?
        
        Get off it.
        Quick.
        
        - Get it up.
        - Crookshanks.
        
        - Stop it.
        Get off, you bloody cat.
        
        - Crookshanks. Leave it alone.
        - Get it up.
        
        Hermione, l hate your cat.
        - Bad Crookshanks.
        
        Well, we'll be eating down in the kitchen.
        
        Hi, Mum.
        
        You hungry, Harry?
        
        You sure you're all right, Harry?
        Gave us quite a turn.
        
        SlRlUS:
        Ohh.
        
        This is very, very peculiar.
        
        SlRlUS:
        He's been attacking Dumbledore as well.
        
        Fudge is using all his power, including
        his influence at the Daily Prophet...
        
        ...to smear anyone who claims
        the Dark Lord has returned.
        
        Why?
        
        He thinks Dumbledore's after his job.
        
        No one in their right mind
        could believe that-
        
        Exactly the point.
        Fudge isn't in his right mind.
        
        It's been twisted and warped by fear.
        
        Now, fear makes people
        do terrible things, Harry.
        
        The last time Voldemort gained power...
        
        ...he almost destroyed
        everything we hold most dear.
        
        Now he's returned, and l'm afraid
        the minister will do almost anything...
        
        ...to avoid facing that terrifying truth.
        
        We think Voldemort
        wants to build up his army again.
        
        Fourteen years ago,
        he had huge numbers at his command.
        
        And not just witches and wizards,
        but all manner of dark creatures.
        
        He's been recruiting heavily, and
        we've been attempting to do the same.
        
        But gathering followers
        isn't the only thing he's interested in.
        
        We believe...
        
        Sirius.
        
        Something he didn't have last time.
        
        You mean like a weapon?
        
        Harry.
        
        HOPKlRK:
        You are hereby expelled.
        
        Before the entire Wizengamot.
        
        Trains. Underground.
        
        Ingenious, these Muggles.
        
        Ahh.
        
        Terrible. Lost a lot of Galleons
        trading on the potions market.
        
        Dumbledore: ls he daft,
        or is he dangerous?
        
        - Morning, Arthur.
        - Morning, Bob.
        
        Interdepartmental memos.
        
        We used to use owls.
        Mess was unbelievable.
        
        [WHlSPERlNG lNDlSTlNCTLY
        
        Merlin's beard. Thank you, Kingsley.
        
        - They changed the time of your hearing.
        - When is it?
        
        In five minutes.
        
        Department of Mysteries.
        
        And l'm confident, minister,
        that you will do the right thing.
        
        Remember, during the hearing,
        speak only when you're spoken to.
        
        Keep calm. You've done nothing wrong.
        
        As the Muggles say, truth will out.
        
        - Yes?
        - Mm.
        
        I'm not allowed in, l'm afraid.
        
        Good luck, Harry.
        
        Disciplinary hearing
        of the 12th of August...
        
        ...into offenses committed
        by Harry James Potter...
        
        ...resident at Number 4 Privet Drive,
        Little Whinging, Surrey.
        
        Interrogators: Cornelius Oswald Fudge,
        Minister of Mag-
        
        ...Brian Dumbledore.
        
        You got our message
        that the time and place of the hearing...
        
        - ...had been changed, did you?
        - l must have missed it.
        
        The charges?
        
        The charges against the accused
        are as follows:
        
        'That he did knowingly...
        
        ...and in full awareness
        of the illegality of his actions...
        
        ...produce a Patronus Charm...
        
        ...in the presence of a Muggle.'
        
        - Do you deny producing said Patronus?
        - No, but-
        
        And you were aware that you were
        forbidden to use magic outside school...
        
        Dementors?
        
        In Little Whinging?
        
        That's quite clever.
        
        I'm sorry to interrupt what I'm sure would
        have been a very well-rehearsed story...
        
        ...but since you can produce
        no witnesses of the event-
        
        What did they look like?
        
        Well, one of them was very large
        and the other rather skinny.
        
        Not the boys. The Dementors.
        
        Oh, right, right. Well, um, big.
        
        Cloaked. Then everything went cold...
        
        ...the Dementors were there
        by coincidence, minister.
        
        I'm sure l must have misunderstood you,
        professor.
        
        Dementors are, after all, under
        the control of the Ministry of Magic.
        
        ...you were suggesting that the Ministry
        had ordered the attack on this boy.
        
        That would be disturbing
        indeed, Madam Undersecretary...
        
        ...which is why l'm sure the Ministry
        will be mounting a full-scale inquiry...
        
        Of course, there is someone...
        
        ...who might be behind the attack.
        
        Cornelius, I implore you to see reason.
        
        The evidence that the Dark Lord
        has returned is incontrovertible.
        
        He is not back.
        
        In the matter of Harry Potter...
        
        ...the law clearly states...
        
        Laws can be changed if necessary,
        Dumbledore.
        
        Clearly. Has it become practice
        to hold a full criminal trial...
        
        ...to deal with a simple matter
        of underage magic?
        
        Those in favor of conviction?
        
        Those in favor
        of clearing the accused of all charges?
        
        Cleared of all charges.
        
        Professor.
        
        Padfoot. Are you barking mad?
        
        What's life without a little risk?
        
        Original Order of the Phoenix.
        
        It's been 14 years.
        
        And still a day doesn't go by
        I don't miss your dad.
        
        Do you really think
        there's going to be a war, Sirius?
        
        It feels like it did before.
        
        You keep it.
        
        Anyway, I suppose
        you're the young ones now.
        
        I'll see you at the train.
        
        I love you.
        
        I'm surprised the Ministry's
        still letting you walk around free.
        
        Better enjoy it while you can.
        
        I expect there's a cell in Azkaban
        with your name on it.
        
        - What'd l tell you? Complete nutter.
        - Just stay away from me!
        
        It's only Malfoy.
        
        Hi, guys.
        
        - Hey, Neville.
        - Hey there, Neville.
        
        What is it?
        
        What's what?
        That. Pulling the carriage.
        
        Nothing's pulling the carriage, Harry.
        
        You're not going mad.
        
        I can see them too.
        
        You're just as sane as l am.
        
        What an interesting necklace.
        
        It's a charm, actually.
        
        Keeps away the Nargles.
        
        Hungry.
        
        I hope there's pudding.
        
        What's a Nargle?
        
        HERMlONE
        No idea.
        
        Good evening, children.
        
        Now, we have two changes
        in staffing this year.
        
        We're pleased to welcome back
        Professor Grubbly-Plank...
        
        ...who'll be taking
        Care of Magical Creatures...
        
        ...while Professor Hagrid
        is on temporary leave.
        
        We also wish to welcome our new
        Defense Against the Dark Arts teacher...
        
        Now, as usual, our caretaker, Mr. Filch,
        has asked me to remind you-
        
        She was at my hearing.
        
        She works for Fudge.
        
        UMBRlDGE: Thank you, headmaster,
        for those kind words of welcome.
        
        And how lovely to see all your bright...
        
        ...happy faces smiling up at me.
        
        I'm sure we're all going
        to be very good friends.
        
        The Ministry of Magic
        has always considered...
        
        ...the education of young witches
        and wizards to be of vital importance.
        
        Although each headmaster...
        
        ...has brought something new
        to this historic school...
        
        Let us preserve
        what must be preserved...
        
        ...perfect what can be perfected...
        
        ...and prune practices
        that ought to be...
        
        ...prohibited.
        
        That really was most illuminating.
        
        llluminating? What a load of waffle.
        - What's it mean?
        
        Magic is forbidden in the corridors...
        
        It means the Ministry's
        interfering at Hogwarts.
        
        Dean, Seamus.
        
        - Good holiday?
        All right.
        
        Better than Seamus', anyway.
        
        - Why not?
        - Let me see. Uh, because of you.
        
        The Daily Prophet's been saying a lot
        of things about you and Dumbledore.
        
        What, your mum believes them?
        
        Nobody was there the night Cedric died.
        
        I guess you should read the Prophet,
        then, like your stupid mother.
        
        - You all right?
        - Fine.
        
        Seamus was bang out of order, mate.
        
        - But he'll come through, you'll see.
        - l said, l'm fine, Ron.
        
        Right. I'll just leave you
        to your thoughts, then.
        
        VOICES WHISPERING]
        
        Harry.
        
        Bring it over here. Over here.
        
        Oh, go on, Seamus. Go on, get it.
        
        Good morning, children.
        
        Ordinary Wizarding Level examinations.
        
        O- W-Ls.
        
        More commonly known as OWLs.
        
        Study hard and you will be rewarded.
        
        Fail to do so,
        and the consequences may be severe.
        
        Your previous instruction in this subject
        has been disturbingly uneven.
        
        But you'll be pleased to know,
        from now on...
        
        ...you will be following a carefully
        structured, Ministry-approved...
        
        ...course of defensive magic. Yes?
        
        There's nothing in here
        about using defensive spells?
        
        Using spells? Ha-ha!
        
        Well, l can't imagine why you would
        need to use spells in my classroom.
        
        We're not gonna use magic?
        
        You'll be learning about defensive spells
        in a secure, risk-free way.
        
        What use is that?
        If we're attacked, it won't be risk-free.
        
        UMBRlDGE: Students will raise their
        hands when they speak in my class.
        
        It is the view of the Ministry...
        
        ...that a theoretical knowledge
        will be sufficient...
        
        ...to get you through your examinations...
        
        ...which, after all,
        is what school is all about.
        
        And how's theory supposed to prepare us
        for what's out there?
        
        There is nothing out there, dear.
        
        Who do you imagine
        wants to attack children like yourself?
        
        Oh, l don't know. Maybe Lord Voldemort.
        
        Now, let me make this quite plain.
        
        You have been told...
        
        ...that a certain dark wizard
        is at large once again.
        
        - This is a lie.
        - lt's not a lie. l saw him. l fought him.
        
        UMBRlDGE:
        Detention, Mr. Potter.
        
        Cedric Diggory dropped dead
        of his own accord?
        
        Cedric Diggory's death
        was a tragic accident.
        
        It was murder. Voldemort killed him.
        
        Enough!
        
        Enough.
        
        See me later, Mr. Potter. My office.
        
        UMBRlDGE:
        Come in.
        
        Good evening, Mr. Potter.
        
        Sit.
        
        You're going to be doing some lines
        for me today, Mr. Potter.
        
        No, not with your quill.
        
        Going to be using
        a rather special one of mine.
        
        Now...
        
        ...l want you to write,
        'I must not tell lies.'
        
        How many times?
        
        Well, let's say for as long as it takes
        for the message to sink in.
        
        You haven't given me any ink.
        
        Oh, you won't need any ink.
        
        Yes?
        
        - Nothing.
        - That's right.
        
        Because you know, deep down...
        
        ...you deserve to be punished.
        
        Don't you, Mr. Potter?
        
        Go on.
        
        Skiving Snackboxes.
        - Sweets that make you ill.
        
        Get out of class whenever you like.
        
        Obtain hours of pleasure
        from unprofitable boredom.
        
        Care for another?
        
        l'm not asking you
        to write all of it for me.
        
        HERMlONE:
        Oh, please.
        
        l've been busy studying
        for these stupid OWL exams.
        
        I'll do the introduction. That's all.
        
        Hermione, you're honestly
        the most wonderful person I've ever met.
        
        - And if l'm ever rude to you again...
        - l'll know you've gone back to normal.
        
        What's wrong with your hand?
        
        Nothing.
        
        The other hand.
        
        - You've got to tell Dumbledore.
        - No.
        
        Dumbledore's got enough
        on his mind right now.
        
        I don't want to give
        Umbridge the satisfaction.
        
        Bloody hell, Harry.
        The woman's torturing you.
        
        - lf the parents knew about this...
        - l haven't got any of those, have l, Ron?
        
        Harry, you've got to report this.
        
        - lt's perfectly simple. You're being-
        - No, it's not.
        
        Hermione, whatever this is,
        it's not simple.
        
        You don't understand.
        
        Then help us to.
        
        Dear Padfoot...
        
        ...l hope you're all right.
        
        It's starting to get colder here.
        Winter is definitely on the way.
        
        In spite of being back at Hogwarts,
        l feel more alone than ever.
        
        I know you, of all people,
        will understand.
        
        Hello, Harry Potter.
        
        - Your feet. Aren't they cold?
        - Bit.
        
        Unfortunately, all my shoes
        have mysteriously disappeared.
        
        I suspect Nargles are behind it.
        
        What are they?
        They're called Thestrals.
        
        They're quite gentle, really, but people
        avoid them because they're a bit...
        
        Different.
        
        But why can't the others see them?
        
        They can only be seen
        by people who've seen death.
        
        So you've known someone
        who's died, then?
        
        My mum.
        
        She was quite an extraordinary witch,
        but she did like to experiment...
        
        ...and one day,
        one of her spells went badly wrong.
        
        - l was 9.
        - l'm sorry.
        
        Yes, it was rather horrible.
        
        I do feel very sad about it sometimes,
        but I've got Dad.
        
        We both believe you, by the way.
        
        That He-Who-Must-Not-Be-Named
        is back, and you fought him...
        
        ...and the Ministry and the Prophet
        are conspiring against you.
        
        Thanks. It seems you're about
        the only ones that do.
        
        I don't think that's true.
        
        But l suppose
        that's how he wants you to feel.
        
        What do you mean?
        
        Well, if I were You-Know-Who...
        
        ...l'd want you to feel cut off
        from everyone else...
        
        ...because if it's just you alone...
        
        ...you're not as much of a threat.
        
        - Do you ever stop eating?
        - What? l'm hungry.
        
        Harry.
        
        Can l join you?
        
        UMBRlDGE: Pardon me, professor,
        but what exactly are you insinuating?
        
        McGONAGALL: I am merely requesting
        that when it comes to my students...
        
        ...you conform to the prescribed
        disciplinary practices.
        
        UMBRlDGE:
        So silly of me, but it sounds...
        
        ...as if you're questioning my authority
        in my own classroom...
        
        ...Minerva.
        
        Not at all, Dolores,
        merely your medieval methods.
        
        I am sorry, dear.
        
        But to question my practices
        is to question the Ministry...
        
        ...and by extension, the minister himself.
        
        I am a tolerant woman...
        
        ...but the one thing
        I will not stand for is disloyalty.
        
        Disloyalty.
        
        Things at Hogwarts
        are far worse than I feared.
        
        Cornelius will want
        to take immediate action.
        
        What's happened to Dumbledore?
        
        Having already revolutionized...
        
        ...the teaching
        of Defense Against the Dark Arts...
        
        ...Dolores Umbridge will,
        as high inquisitor, have powers...
        
        ...to address the seriously falling
        standards at Hogwarts School.
        
        Just one question, dear.
        
        You've been in this post
        how long, exactly?
        
        You applied first for the Defense Against
        the Dark Arts post, is that correct?
        
        Yes.
        
        But you were unsuccessful?
        
        Obviously.
        
        Could you please predict something
        for me?
        
        I'm sorry?
        
        Move those mouths.
        
        One teensy little prophecy?
        
        Pity.
        
        No, wait. Wait, no.
        I think I do see something.
        
        Yes, l do. Something dark.
        
        You are in grave danger.
        
        Lovely.
        
        Cho. What's going on?
        
        It's Professor Trelawney.
        
        Ooh!
        
        Sixteen years l've lived and taught here.
        
        Hogwarts is my home.
        
        You can't do this.
        
        Actually, I can.
        
        Something you'd like to say?
        
        Oh, there are several things
        I would like to say.
        
        There... Shh. Shh.
        
        Professor McGonagall, might l ask you
        to escort Sybil back inside?
        
        Sybil, dear. This way.
        
        Thank you.
        
        UMBRlDGE: Dumbledore, may l remind
        you that under the terms...
        
        ...of Educational Decree Number 23,
        as enacted by the minister-
        
        You have the right
        to dismiss my teachers.
        
        You do not, however, have the authority
        to banish them from the grounds.
        
        That power remains with the headmaster.
        
        For now.
        
        Don't you all have studying to do?
        
        Professor.
        
        Professor?
        
        Professor Dumbledore. Professor!
        
        Professor Dumbledore.
        
        HERMlONE:
        That foul, evil, old gargoyle.
        
        We're not learning how
        to defend ourselves.
        
        We're not learning how
        to pass our OWLs.
        
        She's taking over the entire school.
        
        FUDGE Security has been
        and will remain the Ministry's top priority.
        
        Furthermore,
        we have convincing evidence...
        
        ...that these disappearances
        are the work...
        
        ...of notorious
        mass murderer Sirius Black.
        
        SlRlUS:
        Harry.
        
        Sirius.
        
        - What are you doing here?
        SlRlUS: Answering your letter.
        
        You said you were worried
        about Umbridge. What's she doing?
        
        Training you to kill half-breeds?
        
        - She's not letting us use magic at all.
        SlRlUS: Well, l'm not surprised.
        
        The latest intelligence is that Fudge
        doesn't want you trained in combat.
        
        Combat?
        
        What does he think,
        we're forming some sort of wizard army?
        
        That's exactly what he thinks.
        
        That Dumbledore is assembling
        his own forces to take on the Ministry.
        
        He's becoming more paranoid
        by the minute.
        
        The others wouldn't want me
        telling you this, Harry...
        
        ...but things aren't going at all well
        with the Order.
        
        Fudge is blocking the truth
        at every turn...
        
        ...and these disappearances
        are just how it started before.
        
        Voldemort is on the move.
        
        Well, what can we do?
        
        Someone's coming.
        
        I'm sorry I can't be of more help.
        
        But for now, at least,
        it looks like you're on your own.
        
        He really is out there, isn't he?
        
        We've got to be able
        to defend ourselves.
        
        And if Umbridge refuses to teach us how,
        we need someone who will.
        
        Harry.
        
        This is mad.
        Who'd wanna be taught by me?
        
        I'm a nutter, remember?
        
        Look on the bright side: you can't
        be any worse than old toad face.
        
        - Thanks, Ron.
        - l'm here for you, mate.
        
        Who's supposed to be meeting us, then?
        
        HERMlONE:
        Just a couple of people.
        
        Lovely spot.
        
        Thought it would be safer
        off the beaten track.
        
        Matey, come back here.
        
        Um...
        
        Hi.
        
        So you all know why we're here.
        
        We need a teacher.
        
        A proper teacher.
        
        One who's had experience defending
        themselves against the Dark Arts.
        
        - Why?
        Why?
        
        Because You-Know-Who's back,
        you tosspot.
        
        - So he says.
        HERMlONE: So Dumbledore says.
        
        So Dumbledore says because he says.
        
        The point is, where's the proof?
        
        If Potter could tell us more
        about how Diggory got killed...
        
        I'm not gonna talk about Cedric, so if
        that's why you're here, clear out now.
        
        Come on, Hermione.
        
        They're here because they think
        I'm some sort of freak.
        
        Is it true you can produce
        a Patronus Charm?
        
        HERMlONE:
        Yes.
        
        I've seen it.
        
        Blimey, Harry.
        I didn't know you could do that.
        
        And he killed a basilisk, with the sword
        in Dumbledore's office.
        
        It's true.
        
        Third year, he fought off
        about a hundred Dementors at once.
        
        Last year, he really did fight off
        You-Know-Who in the flesh.
        
        Wait.
        
        Look, it all sounds great
        when you say it like that...
        
        ...but the truth is,
        most of that was just luck.
        
        I didn't know what I was doing
        half the time. I nearly always had help.
        
        - He's just being modest.
        - No, Hermione, l'm not.
        
        Facing this stuff in real life
        is not like school.
        
        In school, if you make a mistake,
        you can just try again tomorrow.
        
        But out there...
        
        ...when you're a second away
        from being murdered...
        
        ...or watching a friend die
        right before your eyes...
        
        You don't know what that's like.
        
        HERMlONE:
        You're right, Harry, we don't.
        
        That's why we need your help.
        
        Because if we're going to have
        any chance at beating...
        
        ...Voldemort...
        
        He's really back?
        
        Right. First we need to find
        a place to practice...
        
        ...where Umbridge won't find out.
        
        - The Shrieking Shack.
        - lt's too small.
        
        - Forbidden Forest?
        - Not bloody likely.
        
        Harry, what happens
        if Umbridge does find out?
        
        HERMlONE:
        Who cares?
        
        I mean, it's sort of exciting, isn't it,
        breaking the rules?
        
        Who are you and what have you done
        with Hermione?
        
        Anyway, at least we know
        one positive thing that came from today.
        
        What's that?
        
        Cho couldn't take her eyes off you,
        could she?
        
        Right. Over the next few days,
        we should each come up...
        
        ...with a couple of possibilities
        of places we can practice.
        
        We've got to make sure, wherever it is,
        there's no chance she can find us.
        
        Will do, Harry.
        
        All student organizations
        are henceforth disbanded.
        
        Any student in noncompliance
        will be expelled.
        
        Watch where you're going, Longbottom.
        
        HERMlONE: You've done it, Neville.
        You found the Room of Requirement.
        
        The what?
        
        HERMlONE: lt's also known as
        the Come and Go Room.
        
        The Room of Requirement only appears
        when a person has real need of it.
        
        And it's always equipped
        for the seeker's needs.
        
        So say you really needed the toilet...
        
        Charming, Ronald.
        But, yes, that is the general idea.
        
        It's brilliant. lt's like Hogwarts
        wants us to fight back.
        
        Expelliarmus.
        
        Whoa!
        
        I'm hopeless.
        
        You're just flourishing your wand
        too much. Try it like this. Expelliarmus.
        
        UMBRlDGE: You will please copy
        the approved text four times...
        
        ...to ensure maximum retention.
        
        - There will be no need to talk.
        - No need to think's more like it.
        
        NEVILLE Expelliarmus.
        UMBRlDGE: Wands away.
        
        Stunning is one of the most useful spells
        in your arsenal.
        
        It's a wizard's bread and butter, really.
        
        So, um, come on, then, Nigel.
        Give it your best shot.
        
        Stupefy!
        
        Good. Not bad at all, Nigel. Well done.
        
        Don't worry. l'll go easy on you.
        
        Thanks, Ronald.
        
        Come on, Ron.
        Come on, Ron.
        
        You can do it.
        Come on, Ron.
        
        - One Sickle.
        - You're on.
        
        Stupefy.
        
        - Thank you.
        - Shut up.
        
        I let her do that.
        It's good manners, isn't it?
        
        It was completely intentional.
        
        UMBRlDGE: Up you come.
        Would you like a cup of tea?
        
        Now, focus on a fixed point
        and try again.
        
        Expelliarmus.
        
        Very good. Keep your concentration.
        
        Great.
        
        A little higher.
        
        Whoa!
        
        I'm okay. I'm okay.
        
        Stupefy.
        Stupefy.
        
        UMBRlDGE: Those wishing tojoin
        the Inquisitorial Squad for extra credit...
        
        ...may sign up
        in the high inquisitor's office.
        
        Diminuendo.
        
        Working hard is important, but there's
        something that matters even more:
        
        Believing in yourself.
        
        Expelliarmus.
        Levicorpus. Got it.
        
        Think of it this way.
        
        Every great wizard in history
        has started out...
        
        ...as nothing more
        than what we are now: students.
        
        If they can do it, why not us?
        
        Stupefy.
        - Expelliarmus.
        
        Expelliarmus.
        
        Expelliarmus.
        
        Reducto.
        
        Expelliarmus.
        - Expelliarmus.
        
        Expelliarmus.
        
        Expelliarmus.
        
        Fantastic, Neville. Well done, man.
        
        So that's it for this lesson.
        
        Now, we're not gonna be meeting again
        until after the holidays.
        
        So just keep practicing on your own
        as best you can.
        
        And well done, everyone.
        Great, great work.
        
        Well done, mate.
        
        Thanks.
        
        See you after Christmas.
        
        See you in the Common Room, Harry.
        
        - Thanks a lot, Harry.
        - No worries.
        
        Merry Christmas.
        
        Thank you so much.
        Not at all. Merry Christmas.
        
        Thank you, Harry.
        - Thank you. Merry Christmas.
        
        - Merry Christmas.
        Have a good Christmas.
        
        Have a great Christmas, Luna.
        We've been thinking.
        
        We could always slip Umbridge
        some Puking Pastilles.
        
        Or Fever Fudge. They give you
        massive, pus-filled boils-
        
        Sounds great, guys.
        Would you excuse me?
        
        Are you all right? I heard Umbridge
        gave you a rough time the other day.
        
        Yeah. l'm okay.
        
        Anyway, it's worth it.
        
        It's just, learning all this...
        
        ...makes me wonder whether,
        if he'd known it...
        
        Cedric did know this stuff.
        
        He was really good.
        
        It's just, Voldemort was better.
        
        You're a really good teacher, Harry.
        
        I've never been able
        to stun anything before.
        
        Mistletoe.
        
        Probably full of Nargles, though.
        
        What are Nargles?
        
        No idea.
        
        Well, how was it?
        
        Wet.
        
        I mean, she was sort of crying.
        
        That bad at it, are you?
        
        I'm sure Harry's kissing
        was more than satisfactory.
        
        Cho spends half her time
        crying these days.
        
        You'd think a bit of snogging
        would cheer her up.
        
        Don't you understand
        how she must be feeling?
        
        Well, obviously
        she's feeling sad about Cedric...
        
        ...and confused about liking Harry
        and guilty about kissing him...
        
        ...conflicted because Umbridge might
        sack her mum from the Ministry...
        
        ...and frightened of failing her OWLs
        because she's worrying about everything.
        
        One person couldn't feel all that.
        They'd explode.
        
        Just because you've got
        the emotional range of a teaspoon...
        
        Harry.
        
        SlRlUS:
        Voldemort may be after something.
        
        Something he didn't have last time.
        
        Harry.
        
        Harry.
        
        In the dream,
        were you standing next to the victim...
        
        ...or looking down at the scene?
        
        Neither. lt was like l...
        
        Will you please just tell me
        what's happening?
        
        Everard, Arthur's on guard duty tonight.
        
        Make sure he's found
        by the right people.
        
        Sir.
        Phineas.
        
        You must go to your portrait
        at Grimmauld Place.
        
        Tell them that Arthur Weasley
        is gravely injured...
        
        ...and his children will be arriving there
        soon by Portkey.
        
        They've got him, Albus.
        It was close, but they think he'll make it.
        
        What's more,
        the Dark Lord failed to acquire it.
        
        Oh, thank goodness. Next we need to-
        
        VOLDEMORT WHISPERS]
        
        Look at me!
        
        What's happening to me?
        
        You wished to see me, headmaster?
        
        Oh, Severus. l'm afraid we can't wait.
        Not even till the morning.
        
        Otherwise, we'll all be vulnerable.
        
        It appears there's a connection...
        
        ...between the Dark Lord's mind
        and your own.
        
        Whether he is, as yet, aware of this
        connection is, for the moment, unclear.
        
        Pray he remains ignorant.
        
        You mean, if he knows about it, then...
        
        - ...he'll be able to read my mind?
        - Read it, control it...
        
        ...unhinge it.
        
        In the past, it was often
        the Dark Lord's pleasure...
        
        ...to invade the minds of his victims...
        
        ...creating visions designed
        to torture them into madness.
        
        Only after extracting the last exquisite
        ounce of agony...
        
        ...only when he had them literally
        begging for death, would he finally...
        
        ...kill them.
        
        Used properly,
        the power of Occlumency...
        
        ...will help shield you
        from access or influence.
        
        In these lessons, I will attempt
        to penetrate your mind.
        
        You will attempt to resist.
        
        Prepare yourself.
        
        Legilimens.
        
        Concentrate, Potter. Focus.
        
        Ho, ho, ho. Merry Christmas.
        
        Here we go.
        
        Daddy's back. Oh.
        
        Sit down, everybody, sit down.
        That's it. Now, presents.
        
        And a nice big box for Ron.
        Big box for you. And, um...
        
        Fred and George. Come on, open up.
        
        - l want to see your faces.
        Yes.
        
        Try it on.
        Thanks, Mum. It's perfect.
        
        - Just what he wanted, actually.
        - Yeah. Right. Thanks, Mum.
        
        Come on, then, everybody.
        Let's clear this away.
        
        Oh, Harry, Harry.
        
        There you are.
        
        - Happy Christmas.
        - Thank you.
        
        - Lovely to have you with us.
        - Thank you.
        
        Now, Daddy. Pass that to Daddy.
        
        Thank you.
        Has everybody got?
        
        Fred? George?
        
        - Hermione.
        A Christmas toast.
        
        To Mr. Harry Potter...
        
        ...without whom I would not be here.
        
        - Harry.
        Harry.
        
        Harry.
        
        That is delicious.
        I shall be needing some more of that.
        
        Daddy, don't forget last Christmas.
        
        I can't understand
        why you don't want to wear it, Ronald.
        
        I look like a bloody idiot, that's why.
        
        HERMlONE:
        No more than usual, Ron.
        
        I don't know why...
        
        Nasty brat, standing there
        as bold as brass.
        
        Harry Potter,
        the boy who stopped the Dark Lord.
        
        Friend of Mudbloods
        and blood-traitors alike.
        
        - lf my poor mistress only knew...
        SlRlUS: Kreacher!
        
        That's enough of your bile.
        Away with you!
        
        Of course, master.
        
        Kreacher lives to serve
        the noble house of Black.
        
        Sorry about that.
        
        He never was very pleasant,
        even when I was a boy.
        
        Not to me, anyway.
        
        What, you grew up here?
        
        SlRlUS:
        This is my parents' house.
        
        I offered it to Dumbledore
        as headquarters for the Order.
        
        About the only useful thing
        I've been able to do.
        
        This is the Black family tree.
        
        My deranged cousin.
        
        I hated the lot of them.
        
        My parents with their pure-blood mania.
        
        My mother did that after I ran away.
        
        Charming woman.
        
        I was 16.
        
        Where did you go?
        
        Round your dad's.
        
        I was always welcome at the Potters'.
        
        I see him so much in you, Harry.
        
        You are so very much alike.
        
        I'm not so sure.
        
        Sirius, when l was...
        
        When I saw Mr. Weasley attacked,
        I wasn't just watching.
        
        I was the snake.
        
        And afterwards, in Dumbledore's office...
        
        ...there was a moment
        when l wanted to-
        
        This connection
        between me and Voldemort.
        
        What if the reason for it
        is that I am becoming more like him?
        
        I just feel so angry all the time.
        
        And what if, after everything
        that I've been through...
        
        ...something's gone wrong inside me?
        What if I'm becoming bad?
        
        I want you to listen to me
        very carefully, Harry.
        
        You're not a bad person.
        
        You're a very good person
        who bad things have happened to.
        
        You understand?
        
        Besides, the world isn't split
        into good people and Death Eaters.
        
        We've all got both light and dark
        inside of us.
        
        What matters
        is the part we choose to act on.
        
        That's who we really are.
        
        Harry, time to go.
        
        When all this is over,
        we'll be a proper family.
        
        You'll see.
        
        Come on.
        
        VOICES WHISPERING]
        
        Really?
        
        HERMlONE:
        Harry. Harry.
        
        Hagrid's back.
        
        I'm sorry.
        
        UMBRlDGE:
        I will say this one last time.
        
        I'm ordering you to tell me
        where you've been.
        
        I told you. I've been away for me health.
        
        - Your health?
        - Yeah. Bit of fresh air, you know.
        
        Oh, yes. As gamekeeper,
        fresh air must be difficult to come by.
        
        If l were you,
        I shouldn't get too used to being back.
        
        In fact, l mightn't bother
        unpacking at all.
        
        This is top-secret, right?
        
        Dumbledore sent me
        to parley with the giants.
        
        - Giants?
        Shh.
        
        You found them?
        
        Well, they're not that hard to find, to be
        perfectly honest. They're so big, see?
        
        I tried to convince them
        to join the cause.
        
        But l wasn't the only one
        that was trying to win them over.
        
        - Death Eaters?
        Yes.
        
        Trying to persuade them
        to join You-Know-Who.
        
        - Did they?
        - l gave them Dumbledore's message.
        
        Suppose some of them remember
        he was friendly to them. l suppose.
        
        And they did this to you?
        
        Not exactly, no.
        
        Oh, go on, you have it, then,
        you dozy dog.
        
        It's changing out there.
        
        Just like last time.
        
        There's a storm coming, Harry.
        
        We'd all best be ready when she does.
        
        We have confirmed
        that 10 high-security prisoners...
        
        ...in the early hours of yesterday evening
        did escape.
        
        And of course, the Muggle prime minister
        has been alerted to the danger.
        
        We strongly suspect...
        
        ...that the breakout was engineered...
        
        ...by a man with personal experience
        in escaping from Azkaban...
        
        ...notorious mass murderer Sirius Black...
        
        ...cousin of escapee Bellatrix Lestrange.
        
        Dumbledore warned Fudge
        this could happen.
        
        He's gonna get us all killed
        just because he can't face the truth.
        
        Harry.
        
        I, uh...
        
        I wanted to apologize.
        
        Now even me mum says the Prophet's
        version of things don't add up.
        
        So, what I'm really trying to say
        is that I believe you.
        
        Neville?
        
        Fourteen years ago...
        
        ...a Death Eater
        named Bellatrix Lestrange...
        
        ...used a Cruciatus Curse on my parents.
        
        She tortured them for information...
        
        ...but they never gave in.
        
        I'm quite proud to be their son.
        
        But l'm not sure
        I'm ready for everyone to know just yet.
        
        We're gonna make them proud, Neville.
        That's a promise.
        
        Make it a powerful memory,
        the happiest you can remember.
        
        Allow it to fill you up.
        Keep trying, Seamus.
        
        George, your turn now.
        
        Expecto Patronum.
        
        A full-bodied Patronus
        is the most difficult to produce...
        
        ...but shield forms can also be equally
        useful against a variety of opponents.
        
        Wow, that was really good.
        
        Fantastic, Ginny.
        
        Remember, your Patronus can only protect
        you for as long as you stay focused.
        
        So focus, Luna.
        
        Think of the happiest thing you can.
        
        Expecto Patronum.
        
        - l'm trying.
        l know. lt's good.
        
        This is really advanced stuff, guys.
        You're doing so well.
        
        Expecto Patronum.
        
        UMBRlDGE:
        I'll make short work of this.
        
        Bombarda Maxima.
        
        Get them.
        
        UMBRlDGE:
        Been watching them for weeks.
        
        And see, 'Dumbledore's Army'...
        
        ...proof of what l've been telling you
        right from the beginning, Cornelius.
        
        All your fear-mongering
        about You-Know-Who...
        
        ...never fooled us for a minute.
        
        We saw your lies for what they were:
        
        A smokescreen for your bid
        to seize control of the Ministry.
        
        Naturally.
        
        No, professor.
        He had nothing to do with it. It was me.
        
        Most noble of you, Harry, to shield me,
        but as has been pointed out...
        
        ...the parchment clearly says
        'Dumbledore's Army,' not 'Potter's.'
        
        I instructed Harry
        to form this organization.
        
        And l, and l alone,
        am responsible for its activities.
        
        Dispatch an owl to the Daily Prophet.
        
        If we hurry,
        we should still make the morning edition.
        
        Dawlish, Shacklebolt,
        you will escort Dumbledore...
        
        ...to Azkaban...
        
        ...to await trial
        for conspiracy and sedition.
        
        Ah. l thought we might hit
        this little snag.
        
        You seem to be laboring
        under the delusion that I'm going to-
        
        What was the phrase?
        
        - come quietly.
        
        Well, l can tell you this:
        
        I have no intention of going to Azkaban.
        
        Enough of this.
        
        Take him.
        
        Whoa.
        
        Well, you may not like him, minister...
        
        ...but you can't deny...
        
        ...Dumbledore has got style.
        
        UMBRlDGE: Boys and girls cannot be
        within eight inches of each other.
        
        Those wishing to join
        the Inquisitorial Squad for extra credit...
        
        Students will be submitted to questioning
        about suspected illicit activities.
        
        Any student in noncompliance
        will be expelled.
        
        Harry.
        
        You did everything you could.
        No one could win against that old hag.
        
        HERMlONE: Even Dumbledore
        didn't see this coming.
        
        Harry, if it's anyone's fault, it's ours.
        
        Yeah, we talked you into it.
        
        Yeah, but l agreed.
        
        I tried so hard to help,
        and all it's done is make things worse.
        
        Anyway, that doesn't matter anymore.
        
        Because I don't want to play anymore.
        All it does is make you care too much.
        
        And the more you care,
        the more you have to lose.
        
        - So maybe it's just better to...
        - To what?
        
        To go it alone.
        
        Psst.
        
        Hagrid.
        
        Any idea where he's taking us?
        
        Hagrid, why can't you just tell us?
        
        I've never seen the centaurs so riled.
        
        And they're dangerous
        at the best of times.
        
        The Ministry restricts
        their territory much more...
        
        ...they'll have a full uprising
        on their hands.
        
        Hagrid, what's going on?
        
        I'm sorry to be so mysterious, you three.
        
        I wouldn't be bothering you at all with it,
        but with Dumbledore gone...
        
        ...l'll likely be getting the sack
        any day now.
        
        And l just couldn't leave
        without telling someone about him.
        
        Grawpy.
        
        Down here, you great buffoon.
        
        Oh, Grawpy.
        
        Brought you some company.
        
        I couldn't just leave him, because-
        
        Because he's my brother.
        
        Blimey.
        
        Well, half brother, really.
        
        He's completely harmless, just like l said.
        Little high-spirited, is all.
        
        Grawpy, that is not polite.
        - Hagrid, do something.
        
        We talked about this.
        You do not grab, do you?
        
        That's your new friend, Hermione.
        
        Grawpy.
        
        HERMlONE:
        Grawp.
        
        Put me down.
        
        Now.
        
        You all right?
        
        Fine.
        
        Just needs a firm hand, is all.
        
        I think you've got an admirer.
        
        You just stay away from her, all right?
        
        He gets his own food and all.
        
        It's company he'll be needing
        when l'm gone.
        
        You will look after him, won't you?
        
        I'm the only family he's got.
        
        Feeling sentimental?
        
        - That's private.
        - Not to me.
        
        And not to the Dark Lord,
        if you don't improve.
        
        Every memory he has access to
        is a weapon he can use against you.
        
        You won't last two seconds
        if he invades your mind.
        
        You're just like your father.
        
        Lazy, arrogant.
        
        - Don't say a word against my father.
        - Weak.
        
        - l'm not weak.
        - Then prove it.
        
        Control your emotions.
        
        Discipline your mind.
        
        Legilimens.
        
        Harry.
        
        Sirius.
        
        I may vomit.
        
        Stop it.
        
        Is this what you call control?
        
        We've been at it for hours.
        If l could just rest.
        
        The Dark Lord isn't resting.
        
        You and Black, you're two of a kind.
        Sentimental children forever whining...
        
        ...about how bitterly unfair
        your lives have been.
        
        Well, it may have escaped your notice,
        but life isn't fair.
        
        Your blessed father knew that.
        In fact, he frequently saw to it.
        
        - My father was a great man.
        - Your father was a swine.
        
        - Legilimens.
        - Protego.
        
        Come on, Moony, Padfoot.
        
        Snape. Expelliarmus.
        
        Nice one, James.
        
        - Dad.
        Impedimenta.
        
        ALL
        Snivellus Greasy. Snivellus Greasy.
        
        Right. Who wants to see me
        take off Snivelly's trousers?
        
        Snivellus Greasy. Snivellus Greasy.
        
        Enough.
        
        Enough.
        
        Your lessons are at an end.
        
        I-
        
        Get out.
        
        What's your name?
        Michael.
        
        Your hand's gonna be fine, Michael.
        
        Yeah. lt's not as bad as it seems. See?
        
        It's fading already.
        
        You can hardly see ours anymore,
        and the pain stops after a while.
        
        UMBRlDGE:
        As l told you once before, Mr. Potter...
        
        ...naughty children
        deserve to be punished.
        
        You know, George...
        
        ...l've always felt our futures lay outside
        the world of academic achievement.
        
        Fred, I've been thinking
        exactly the same thing.
        
        All right, professor!
        
        Here you go.
        
        Aah!
        
        Ready when you are.
        
        I need that prophecy.
        
        SlRlUS:
        You'll have to kill me.
        
        Oh, l will.
        But first, you will fetch it for me.
        
        - Crucio.
        - Aah!
        
        - Crucio.
        - Aahh!
        
        Sirius.
        
        HERMlONE:
        Harry, are you sure?
        
        I saw it. lt's just like with Mr. Weasley.
        
        It's the door I've been dreaming about.
        
        I couldn't remember
        where l'd seen it before.
        
        Sirius said Voldemort
        was after something.
        
        Something he didn't have the last time,
        in the Department of Mysteries.
        
        Harry, please, just listen.
        
        What if Voldemort
        meant for you to see this?
        
        What if he's only hurting Sirius
        because he's trying to get to you?
        
        What if he is?
        I'm supposed to just let him die?
        
        Hermione,
        he's the only family l've got left.
        
        What do we do?
        
        We'll have to use the Floo Network.
        
        HERMlONE: Umbridge has the chimneys
        under surveillance.
        
        Not all of them.
        
        Alohomora.
        
        Alert the Order if you can.
        
        Are you mental? We're going with you.
        
        It's too dangerous.
        
        When are you going to get it
        into your head? We're in this together.
        
        That you are.
        
        Caught this one
        trying to help the Weasley girl.
        
        You were going to Dumbledore,
        weren't you?
        
        - No.
        - Liar.
        
        You sent for me, headmistress?
        - Snape, yes.
        
        The time has come for answers, whether
        he wants to give them to me or not.
        
        Have you brought the Veritaserum?
        
        I'm afraid you've used up
        all my stores interrogating students.
        
        The last of it on Miss Chang.
        
        Unless you wish to poison him-
        
        And l assure you, l would have
        the greatest sympathy if you did.
        
        - l cannot help you.
        
        He's got Padfoot.
        
        He's got Padfoot at the place
        where it's hidden.
        
        Padfoot? What is Padfoot?
        Where what is hidden?
        
        What is he talking about, Snape?
        
        No idea.
        
        Very well.
        
        You give me no choice, Potter.
        
        As this is an issue of Ministry security...
        
        ...you leave me with...
        
        ...no alternative.
        
        The Cruciatus Curse
        ought to loosen your tongue.
        
        That's illegal.
        
        What Cornelius doesn't know
        won't hurt him.
        
        Tell her, Harry!
        
        Tell me what?
        
        Well, if you won't tell her where it is...
        
        ...l will.
        
        Where what is?
        
        Dumbledore's secret weapon.
        
        How much further?
        
        Not far.
        
        It had to be somewhere
        students wouldn't find it accidentally.
        
        What are you doing?
        
        Improvising.
        
        UMBRlDGE:
        Well?
        
        Where is this weapon?
        
        There isn't one, is there?
        
        You were trying to trick me.
        
        You know...
        
        ...l really hate children.
        
        You have no business here, centaur.
        This is a Ministry matter.
        
        Lower your weapons.
        
        I warn you, under the law,
        as creatures of near-human intelligence...
        
        Protego.
        
        How dare you?
        
        Filthy half-breed.
        
        Incarcerous.
        
        Please. Please stop it. Please.
        
        Now, enough. l will have order.
        
        UMBRlDGE:
        You filthy animal.
        
        Do you know who l am?
        
        Leave him alone. lt's not his fault.
        
        No, he doesn't understand.
        
        Potter, do something.
        Tell them l mean no harm.
        
        I'm sorry, professor.
        
        - But l must not tell lies.
        - What are you doing?
        
        I am Senior Undersecretary
        Dolores Jane Umbridge.
        
        Let me go!
        
        HERMlONE:
        Thank you, Grawp.
        
        Hermione. Hermione, Sirius.
        
        - How'd you get away?
        - Puking Pastilles. lt wasn't pretty.
        
        Told them l was hungry,
        wanted some sweets.
        
        They told me to bugger off
        and ate the lot themselves.
        
        That was clever, Ron.
        
        - Has been known to happen.
        - lt was brilliant.
        
        So how are we getting to London?
        
        Look, it's not that I don't appreciate
        everything you've done, all of you...
        
        ...but l've got you
        into enough trouble as it is.
        
        Dumbledore's Army's supposed to be
        about doing something real.
        
        Or was that all just words to you?
        
        Maybe you don't have to do this
        all by yourself, mate.
        
        So how are we going to get to London?
        
        We fly, of course.
        
        Department of Mysteries.
        
        This is it.
        
        Ninety-two. Ninety-three.
        
        Ninety-four.
        
        Ninety-five.
        
        - He should be here.
        Harry.
        
        It's got your name on it.
        
        The one with the power
        to vanquish the Dark Lord approaches.
        
        And the Dark Lord
        shall mark him as his equal...
        
        ...but he shall have power
        the Dark Lord knows not.
        
        For neither can live
        while the other survives.
        
        HERMlONE:
        Harry.
        
        Where's Sirius?
        
        You know, you really should learn
        to tell the difference between dreams...
        
        ...and reality.
        
        You saw only what the Dark Lord
        wanted you to see.
        
        Now, hand me the prophecy.
        
        If you do anything to us, l'll break it.
        
        He knows how to play.
        
        Itty, bitty baby.
        
        Potter.
        
        Bellatrix Lestrange.
        
        Neville Longbottom, is it?
        How's Mum and Dad?
        
        Better, now they're about to be avenged.
        
        Now, let's everybody just calm down...
        
        ...shall we?
        
        All we want is that prophecy.
        
        Why did Voldemort
        need me to come and get this?
        
        LESTRANGE
        You dare speak his name?
        
        You filthy half-blood!
        
        It's all right.
        He's just a curious lad, aren't you?
        
        Prophecies can only be retrieved
        by those about whom they are made.
        
        Which is lucky for you, really.
        
        Haven't you always wondered...
        
        ...what was the reason for the connection
        between you and the Dark Lord?
        
        Why he was unable to kill you...
        
        ...when you were just an infant?
        
        Don't you want to know
        the secret of your scar?
        
        All the answers are there, Potter,
        in your hand.
        
        All you have to do...
        
        ...is give it to me.
        
        Then l can show you everything.
        
        I've waited 14 years.
        
        I know.
        
        I guess I can wait a little longer.
        Now. Stupefy.
        
        Stupefy.
        
        Levicorpus.
        
        Petrificus Totalus.
        
        Well done, Neville.
        
        Stupefy.
        
        - Stupefy.
        - Stupefy.
        
        Stupefy.
        
        Reducto.
        
        Get back to the door.
        
        Department of Mysteries.
        They got that bit right, didn't they?
        
        VOICES WHISPERING]
        
        The voices.
        
        Can you tell what they're saying?
        
        There aren't any voices, Harry.
        
        Let's get out of here.
        
        I hear them too.
        
        HERMlONE:
        Harry, it's just an empty archway.
        
        Please, Harry.
        
        Get behind me.
        
        Did you actually believe...
        
        ...or were you truly naive enough
        to think...
        
        ...that children stood a chance
        against us?
        
        I'll make this simple for you, Potter.
        
        Give me the prophecy now...
        
        ...or watch your friends die.
        
        - Don't give it to him, Harry.
        - Shh!
        
        Get away from my godson.
        
        Now, listen to me.
        Take the others and get out of here.
        
        What? No, l'm staying with you.
        
        You've done beautifully.
        
        Now, let me take it from here.
        
        LUClUS:
        Black.
        
        Expelliarmus!
        
        Nice one, James.
        
        Avada Kedavra.
        
        No. No.
        
        I killed Sirius Black. Ha-ha-ha!
        
        - You coming to get me?
        - Crucio.
        
        You've got to mean it, Harry.
        
        She killed him. She deserves it.
        
        You know the spell, Harry.
        
        Do it.
        
        VOLDEMORT GRUNTS]
        [WAND CLATTERS]
        
        So weak.
        
        It was foolish of you
        to come here tonight, Tom.
        
        The Aurors are on their way.
        
        By which time l shall be gone, and you...
        
        ...shall be dead.
        
        VOLDEMORT YELLlNG]
        
        VOLDEMORT GRUNTING]
        
        VOLDEMORT LAUGHlNG]
        
        VOLDEMORT GRUNTING]
        
        VOLDEMORT YELLS]
        
        You've lost, old man.
        
        Harry.
        
        Aah!
        
        So weak.
        
        So vulnerable.
        
        Look at me.
        
        Harry, it isn't how you are alike.
        
        It's how you are not.
        
        Aah!
        
        Harry?
        
        You're the weak one...
        
        ...and you'll never know
        love or friendship.
        
        And l feel sorry for you.
        
        VOLDEMORT SCREAMS]
        
        You're a fool, Harry Potter.
        
        And you will lose everything.
        
        He's back.
        
        I know how you feel, Harry.
        
        No, you don't.
        
        It's my fault.
        
        No, the fault is mine.
        
        I knew it was only a matter of time...
        
        ...before Voldemort made the connection
        between you.
        
        I thought by distancing myself from you,
        as l have done all year...
        
        ...he'd be less tempted, and therefore
        you might be more protected.
        
        The prophecy said:
        
        'Neither one can live
        while the other one survives.'
        
        It means one of us
        is gonna have to kill the other, in the end.
        
        Yes.
        
        Why didn't you tell me?
        
        For the same reason
        you tried to save Sirius.
        
        The same reason your friends saved you.
        
        After all these years,
        after all you've suffered...
        
        ...l didn't want to cause you
        any more pain.
        
        I cared too much about you.
        
        How come you're not at the feast?
        
        Lost all my possessions.
        Apparently people have been hiding them.
        
        - That's awful.
        - Oh, it's all good fun.
        
        But as it's the last night,
        I really do need them back.
        
        Do you want any help finding them?
        
        I'm sorry about your godfather, Harry.
        
        Are you sure you don't want
        any help looking?
        
        That's all right.
        
        Anyway, my mum always said...
        
        ...the things we lose have a way
        of coming back to us in the end.
        
        If not always in the way we expect.
        
        Think l'll just go have some pudding.
        
        I've been thinking about something
        Dumbledore said to me.
        
        What's that?
        
        That even though
        we've got a fight ahead of us...
        
        ...we've got one thing
        that Voldemort doesn't have.
        
        Yeah?
        
        Something worth fighting for.
    ";

    $HP6 = "WOMAN:
    I killed Sirius Black!
    
    MAN:
    He's back.
    
    MAN [ON RADIO]: The police are continuing
    with the investigation...
    
    ...into the cause
    of the Millennium Bridge disaster.
    
    Traffic has been halted
    as police search for survivors.
    
    The surrounding area remains closed.
    
    The mayor has urged Londoners
    to remain calm...
    
    'Harry Potter.'
    
    Who's Harry Potter?
    
    Oh, no one.
    
    Bit of a tosser, really.
    
    Funny, that paper of yours.
    
    Couple nights ago,
    I could've sworn I saw a picture move.
    
    - Really?
    - Thought I was going around the twist.
    
    - Hey, I was wondering...
    - Eleven. That's when I get off.
    
    You can tell me all about
    that tosser Harry Potter.
    
    DUMBLEDORE:
    You've been reckless this summer, Harry.
    
    HARRY:
    I like riding around on trains.
    
    Takes my mind off things.
    
    Rather unpleasant to behold, isn't it?
    
    The tale is thrilling, if I say so myself.
    
    But now is not the time to tell it.
    
    Take my arm.
    
    Do as I say.
    
    I just Apparated, didn't I?
    
    Indeed. Quite successfully too,
    I might add.
    
    Most people vomit the first time.
    
    I can't imagine why.
    
    DUMBLEDORE: Welcome to the
    charming village of Budleigh Babberton.
    
    Harry, I assume, right about now, you must
    be wondering why I brought you here.
    
    Am I right?
    
    Actually, sir, after all these years,
    I just sort of go with it.
    
    Wands out, Harry.
    
    [WHISPERING]
    Horace?
    
    Horace?
    
    Merlin's beard!
    
    No need to disfigure me, Albus.
    
    [IN NORMAL TONE] Well, I must say you
    make a very convincing armchair, Horace.
    
    It's all in the upholstery. I come by
    the stuffing naturally. What gave me away?
    
    Dragon's blood.
    
    - Oh.
    DUMBLEDORE: Oh, yes, introductions.
    
    Harry, I'd like you to meet
    an old friend and colleague of mine...
    
    ...Horace Slughorn.
    
    Horace...
    
    ...well, you know who this is.
    
    SLUGHORN:
    Harry Potter.
    
    [CHUCKLES]
    
    DUMBLEDORE:
    What's with all the theatrics, Horace?
    
    You weren't, by any chance,
    waiting for someone else?
    
    Someone else?
    I'm sure I don't know what you mean.
    
    All right, the Death Eaters have been
    trying to recruit me for over a year.
    
    Do you know what that's like?
    
    You can only say no so many times,
    so I never stay anywhere more than a week.
    
    Muggles who own this
    are in the Canary Islands.
    
    Well, I think we should put it back
    in order for them, don't you? Mind.
    
    [SQUEAKING]
    
    That was fun.
    
    - Do you mind if I use the loo?
    - No, of course.
    
    Don't think I don't know
    why you're here, Albus.
    
    The answer's still no.
    Absolutely and unequivocally, no.
    
    You're very like your father.
    
    - Except for the eyes. You have your...
    - My mother's eyes. Yeah.
    
    Lily. Lovely Lily. She was
    exceedingly bright, your mother.
    
    Even more impressive
    when one considers she was Muggle-born.
    
    One of my best friends is Muggle-born.
    Best in our year.
    
    Please don't think I'm prejudiced.
    No, no.
    
    Your mother was one of my
    absolute favorites. Look, there she is.
    
    Right at the front.
    
    All mine. Each and every one.
    
    Ex-students, I mean.
    
    You recognize Barnabas Cuffe,
    editor of The Daily Prophet.
    
    Always takes my owl, should I wish to
    register an opinion on the news of the day.
    
    Gwenog Jones,
    captain of the Holyhead Harpies.
    
    Free tickets whenever I want them.
    
    Of course, I haven't been
    to a match in some time.
    
    Ah, yes.
    
    Regulus Black.
    
    You no doubt know of his older brother
    Sirius. Died a few weeks ago.
    
    I taught the whole Black family,
    except Sirius.
    
    It's a shame. Talented boy.
    
    I got Regulus when he came along,
    of course, but I'd have liked the set.
    
    DUMBLEDORE:
    Horace?
    
    Do you mind if I take this?
    
    - I do love knitting patterns.
    - Yes, of course. But you're not leaving?
    
    I think I know a lost cause
    when I see one. Regrettable.
    
    I would have considered it
    a personal triumph...
    
    ...had you consented to return
    to Hogwarts. Oh, well.
    
    You're like my friend Mr. Potter here,
    one of a kind.
    
    Well, bye-bye, Horace.
    
    Bye.
    
    All right. I'll do it.
    
    But I want Professor Merrythought's
    old office, not the water closet I had before.
    
    And I expect a raise.
    These are mad times we live in. Mad!
    
    They are indeed.
    
    [DUMBLEDORE HUMMING]
    
    HARRY:
    Sir, exactly what was all that about?
    
    You are talented, famous and powerful.
    Everything Horace values.
    
    Professor Slughorn is gonna try
    to collect you, Harry.
    
    You would be his crowning jewel.
    
    That's why he's returning to Hogwarts.
    And it's crucial he should return.
    
    I fear I may have stolen
    a wondrous night from you, Harry.
    
    She was, truthfully, very pretty, the girl.
    
    It's all right, sir.
    I'll go back tomorrow, make some excuse.
    
    Oh, you'll not be returning
    to Little Whinging tonight, Harry.
    
    But, sir, what about Hedwig?
    And my trunk?
    
    Both are waiting for you.
    
    [WATER SPLASHES]
    
    [HARRY GRUNTS]
    
    [HEDWIG CHIRPS]
    
    Hedwig.
    
    Mum?
    
    Ginny, what is it?
    
    I was only wondering
    when Harry got here.
    
    - What? Harry? Harry who?
    - Harry Potter, of course.
    
    I think I'd know if Harry Potter
    was in my house, wouldn't I?
    
    - His trunk's in the kitchen, and his owl.
    - No, dear, I seriously doubt that.
    
    [HEDWIG CHIRPING]
    
    [FOOTSTEPS APPROACHING]
    
    Harry? Did someone say 'Harry'?
    
    GINNY:
    Me, nosy. Is he up there with you?
    
    Of course not. I'd know if my best friend
    was in my room, wouldn't I?
    
    HERMIONE: Is that an owl?
    GINNY: You haven't seen him, have you?
    
    He's wandering about the house.
    
    HERMIONE: Really?
    RON: Really.
    
    MOLLY:
    Harry!
    
    HERMIONE:
    Harry!
    
    Hello.
    
    What a lovely surprise.
    
    [MOLLY LAUGHING]
    
    Why didn't you let us know
    you were coming?
    
    - I didn't know. Dumbledore.
    - Oh, that man.
    
    But then, what would we do
    without him?
    
    Got a bit of toothpaste.
    
    So when did you get here?
    
    A few days ago.
    
    Though for a while,
    I wasn't sure I was coming.
    
    Mum sort of lost it last week.
    
    Said Ginny and I had no business
    going back to Hogwarts.
    
    That it's too dangerous.
    
    - Oh, come on.
    - She's not alone.
    
    Even my parents, and they're Muggles,
    know something bad's happening.
    
    Anyway, Dad stepped in,
    told her she was being barmy...
    
    ...and it took a few days,
    but she came around.
    
    But this is Hogwarts we're talking about.
    It's Dumbledore. What could be safer?
    
    There's been a lot of talk recently that...
    
    ...Dumbledore's got a bit old.
    
    Rubbish! Well, he's only...
    
    What is he?
    
    Hundred and fifty?
    Give or take a few years.
    
    [ALL LAUGHING]
    
    BELLATRIX: Cissy! You can't do this!
    He can't be trusted!
    
    NARCISSA:
    The Dark Lord trusts him.
    
    BELLATRIX: The Dark Lord's mistaken.
    - Pfft.
    
    [CHILDREN CHATTERING]
    
    [KNOCKING]
    
    SNAPE:
    Run along, Wormtail.
    
    I know I ought not to be here.
    
    The Dark Lord himself
    forbade me to speak of this.
    
    If the Dark Lord has forbidden it,
    you ought not to speak.
    
    Put it down, Bella.
    We mustn't touch what isn't ours.
    
    As it so happens,
    I'm aware of your situation, Narcissa.
    
    BELLATRIX:
    You?
    
    The Dark Lord told you?
    
    Your sister doubts me.
    
    Understandable. Over the years
    I've played my part well.
    
    So well, I've deceived
    one of the greatest wizards of all time.
    
    [BELLATRIX SNORTS]
    
    Dumbledore is a great wizard.
    Only a fool would question it.
    
    I don't doubt you, Severus.
    
    You should be honored, Cissy.
    As should Draco.
    
    He's just a boy.
    
    I can't change the Dark Lord's mind.
    
    But it might be possible
    for me to help Draco.
    
    NARCISSA: Severus.
    - Swear to it.
    
    Make the Unbreakable Vow.
    
    It's just empty words.
    
    He'll give it his best effort.
    
    But when it matters most...
    
    ...he'll just slither back into his hole.
    
    Coward.
    
    Take out your wand.
    
    Will you...
    
    ...Severus Snape...
    
    ...watch over Draco Malfoy...
    
    ...as he attempts to fulfill
    the Dark Lord's wishes?
    
    I will.
    
    And will you, to the best of your ability...
    
    ...protect him from harm?
    
    I will.
    
    BELLATRIX:
    And if Draco should fail...
    
    ...will you yourself carry out the deed...
    
    ...the Dark Lord
    has ordered Draco to perform?
    
    I will.
    
    Step up! Step up!
    We've got Fainting Fancies!
    
    Nosebleed Nougats!
    
    - And just in time for school...
    - Puking Pastilles!
    
    - Into the cauldron, handsome.
    - Into the cauldron, handsome.
    
    FEMALE VOICE:
    I will have order!
    
    I really hate children. I will have order!
    
    - Peruvian Instant Darkness Powder.
    - A real money spinner, that.
    
    Handy if you need
    to make a quick getaway.
    
    GEORGE: Hello, ladies.
    FRED: Hello, ladies.
    
    - Love potions, eh?
    - Yeah, they really do work.
    
    Then again, the way we hear it, sis,
    you're doing just fine on your own.
    
    Meaning?
    
    GEORGE:
    Are you not currently dating Dean Thomas?
    
    It's none of your business.
    
    RON:
    How much for this?
    
    - Five Galleons.
    - Five Galleons.
    
    - How much for me?
    - Five Galleons.
    
    I'm your brother.
    
    - Ten Galleons.
    - Ten Galleons.
    
    RON:
    Come on, let's go.
    
    Hi, Ron.
    
    Hi.
    
    ////20 min.////////////////////////////////////////
    
    HERMIONE: How are Fred and George
    doing it? Half the Alley's closed down.
    
    RON: Fred reckons
    people need a laugh these days.
    
    HARRY:
    I reckon he's right.
    
    HERMIONE:
    Oh, no.
    
    Everyone got their wands
    from Ollivander's.
    
    Harry?
    
    Is it me, or do Draco and Mummy look like
    two people who don't want to be followed?
    
    [SPEAKING INDISTINCTLY]
    
    [DOG BARKING]
    
    [BELL RINGING]
    
    LUNA:
    Quibbler.
    
    Quibbler.
    
    He's lovely. They've been known
    to sing on Boxing Day, you know.
    
    - Quibbler?
    - Oh, please.
    
    - What's a Wrackspurt?
    - They're invisible creatures.
    
    They float in your ears
    and make your brain go fuzzy.
    
    Quibbler.
    
    RON: So, what was Draco doing
    with that weird-looking cabinet?
    
    And who were all those people?
    
    Don't you see?
    It was a ceremony, an initiation.
    
    Stop it, Harry.
    I know where you're going.
    
    It's happened. He's one of them.
    
    One of what?
    
    Harry is under the impression
    Draco Malfoy is now a Death Eater.
    
    You're barking.
    
    What would You-Know-Who
    want with Malfoy?
    
    Well, then what's he doing in
    Borgin and Burkes? Browsing for furniture?
    
    It's a creepy shop. He's a creepy bloke.
    
    Look, his father is a Death Eater.
    It only makes sense.
    
    Hermione saw it with her own eyes.
    
    I told you, I don't know what I saw.
    
    I need some air.
    
    MAN: Don't worry. When we get
    to Hogwarts, we'll sort it out.
    
    [CHATTERING]
    
    DRACO: What was that? Blaise?
    BLAISE: Don't know.
    
    PANSY: Relax, boys. It's probably just
    a first-year messing around.
    
    Come on, Draco. Sit down.
    We'll be at Hogwarts soon.
    
    Hogwarts.
    What a pathetic excuse for a school.
    
    I'd pitch myself off
    the Astronomy Tower...
    
    ...if I had to continue
    for another two years.
    
    What's that supposed to mean?
    
    Let's just say I don't think you'll see me
    wasting my time in Charms class next year.
    
    [BLAISE LAUGHS]
    
    Amused, Blaise?
    
    We'll see just who's laughing in the end.
    
    You two go on.
    I wanna check something.
    
    Where's Harry?
    
    He's probably already on the platform.
    Come on.
    
    DRACO: Didn't Mummy ever tell you
    it was rude to eavesdrop, Potter?
    
    Petrificus Totalus.
    
    Oh, yeah...
    
    ...she was dead before you could wipe
    the drool off your chin.
    
    That's for my father.
    Enjoy your ride back to London.
    
    Finite.
    
    - Hello, Harry.
    - Luna!
    
    - How'd you know where I was?
    - Wrackspurts. Your head's full of them.
    
    HARRY: Sorry I made you miss
    the carriages, by the way, Luna.
    
    LUNA: That's all right.
    It was like being with a friend.
    
    Oh, I am your friend, Luna.
    
    That's nice.
    
    About time. I've been looking
    all over for you two.
    
    Right. Names?
    
    Professor Flitwick,
    you've known me for five years.
    
    No exceptions, Potter.
    
    Who are those people?
    
    Aurors. For security.
    
    What's this cane here, then?
    
    DRACO: It's not a cane, you cretin.
    It's a walking stick.
    
    FILCH: And what exactly would you
    be wanting with a...?
    
    Could be construed
    as an offensive weapon.
    
    It's all right, Mr. Filch.
    I can vouch for Mr. Malfoy.
    
    DRACO:
    Nice face, Potter.
    
    Would you like me to fix it for you?
    
    Personally, I think you look
    a bit more devil-may-care this way...
    
    ...but it's up to you.
    
    Well, have you ever fixed a nose before?
    
    No, but I've done several toes,
    and how different are they, really?
    
    Um... Okay, yeah. Give it a go.
    
    - Episkey.
    - Ah!
    
    [HARRY GROANING]
    
    - How do I look?
    - Exceptionally ordinary.
    
    Brilliant.
    
    [CHATTERING]
    
    RON:
    Don't worry. He'll be here in a minute.
    
    Will you stop eating?
    
    Your best friend is missing!
    
    Oi. Turn around, you lunatic.
    
    GINNY:
    He's covered in blood again.
    
    - Why is it he's always covered in blood?
    - Looks like it's his own this time.
    
    Where have you been?
    
    - What happened to your face?
    - Later.
    
    What've I missed?
    
    Sorting Hat urged us all to be brave
    and strong in these troubled times.
    
    Easy for it to say, huh?
    It's a hat, isn't it?
    
    DUMBLEDORE:
    Very best of evenings to you all.
    
    HARRY:
    Thanks.
    
    First off, let me introduce
    the newest member of our staff...
    
    ...Horace Slughorn.
    
    [STUDENTS APPLAUDING]
    
    Professor Slughorn, I'm happy to say...
    
    ...has agreed to resume
    his old post as Potions Master.
    
    Meanwhile, the post of
    Defense Against the Dark Arts...
    
    ...will be taken by Professor Snape.
    
    STUDENTS:
    Snape?
    
    [STUDENTS CLAPPING]
    
    DUMBLEDORE:
    Now, as you know...
    
    ...each and every one of you was searched
    upon your arrival here tonight.
    
    And you have the right to know why.
    
    Once there was a young man,
    who, like you...
    
    ...sat in this very hall...
    
    ...walked this castle's corridors,
    slept under its roof.
    
    He seemed to all the world
    a student like any other.
    
    His name?
    
    Tom Riddle.
    
    [MURMURING]
    
    Today, of course...
    
    ...he's known all over the world
    by another name.
    
    Which is why, as I stand looking out
    upon you all tonight...
    
    ...l'm reminded of a sobering fact.
    
    Every day, every hour...
    
    ...this very minute, perhaps...
    
    ...dark forces attempt to penetrate
    this castle's walls.
    
    But in the end,
    their greatest weapon is you.
    
    Just something to think about.
    
    Now, off to bed. Pip-pip.
    
    RON:
    That was cheerful.
    
    History of Magic is upstairs,
    ladies, not down.
    
    Mr. Davies! Mr. Davies!
    That is the girls' lavatory.
    
    Potter.
    
    Oh, this can't be good.
    
    Enjoying ourselves, are we?
    
    - I had a free period this morning, professor.
    - So I noticed.
    
    I would think you would want to
    fill it with Potions.
    
    Or is it no longer your ambition
    to become an Auror?
    
    It was, but I was told I had to
    get an 'Outstanding' in my O.W.L.
    
    So you did, when Professor Snape
    was teaching Potions.
    
    However, Professor Slughorn is perfectly
    happy to accept N.E.W.T. s students...
    
    ...with 'Exceeds Expectations.'
    
    Brilliant. Um...
    
    - Well, I'll head there straightaway.
    - Oh, good, good.
    
    Potter, take Weasley with you.
    He looks far too happy over there.
    
    RON:
    I don't wanna take Potions.
    
    There's Quidditch trials coming up.
    I need to practice.
    
    SLUGHORN: Attention to detail in the
    preparation is the prerequisite of all planning.
    
    Ah.
    
    Harry, my boy, I was beginning to worry.
    We've brought someone with us, I see.
    
    Ron Weasley, sir.
    
    But I'm dead awful at Potions,
    a menace, actually.
    
    - I'm gonna...
    SLUGHORN: Nonsense, we'll sort you out.
    
    Any friend of Harry's is a friend of mine.
    Get your books out.
    
    HARRY: I haven't actually got
    my book yet, and nor has Ron.
    
    Get what you want from the cupboard.
    
    Now, as I was saying,
    I prepared some concoctions this morning.
    
    Any ideas what these might be?
    
    - Yes, Miss...?
    - Granger, sir.
    
    That one there is Veritaserum.
    It's a truth-telling serum.
    
    And that would be Polyjuice Potion.
    
    It's terribly tricky to make.
    
    And this is Amortentia...
    
    ...the most powerful
    love potion in the world.
    
    It's rumored to smell differently to each
    person according to what attracts them.
    
    For example, I smell...
    
    ...freshly mown grass,
    and new parchment, and...
    
    ...spearmint toothpaste.
    
    SLUGHORN: Now, Amortentia doesn't create
    actual love. That would be impossible.
    
    But it does cause
    a powerful infatuation or obsession.
    
    And for that reason, it is probably
    the most dangerous potion in this room.
    
    Sir? You haven't told us
    what's in that one.
    
    Oh, yes.
    
    What you see before you,
    ladies and gentlemen...
    
    ...is a curious little potion
    known as Felix Felicis.
    
    But it is more commonly referred to as...
    
    - Liquid luck.
    - Yes, Miss Granger. Liquid luck.
    
    Desperately tricky to make,
    disastrous should you get it wrong.
    
    One sip and you will find
    that all of your endeavors succeed.
    
    At least until the effects wear off.
    
    So this is what I offer each of you today.
    
    One tiny vial of liquid luck to the student
    who, in the hour that remains...
    
    ...manages to brew an acceptable
    Draught of Living Death...
    
    ...the recipes for which can be found
    on page 10 of your books.
    
    I should point out, however, only once did
    a student manage to brew a potion...
    
    ...of sufficient quality to claim this prize.
    
    Nevertheless, good luck to you all.
    
    Let the brewing commence.
    
    How did you do that?
    
    You crush it. Don't cut it.
    
    No. The instructions
    specifically say to cut.
    
    No, really.
    
    Merlin's beard! It is perfect.
    
    So perfect I daresay
    one drop would kill us all.
    
    So here we are, then, as promised.
    
    One vial of Felix Felicis.
    
    Congratulations.
    
    Use it well.
    
    [KNOCKING]
    
    DUMBLEDORE:
    Harry, you got my message. Come in.
    
    How are you?
    
    I'm fine, sir.
    
    Enjoying your classes?
    
    I know Professor Slughorn
    is most impressed with you.
    
    I think he overestimates my abilities, sir.
    
    Do you?
    
    Definitely.
    
    [DUMBLEDORE CHUCKLES]
    
    What about your activities
    outside the classroom?
    
    - Sir?
    - Well, I notice you spend...
    
    ...a great deal of time with Miss Granger.
    
    I can't help wondering...
    
    Oh, no, no. I mean, she's brilliant,
    and we're friends, but, no.
    
    Forgive me. I was merely being curious.
    
    But enough chitchat.
    
    You must be wondering
    why I summoned you here tonight.
    
    The answer lies here.
    
    What you are looking at are memories.
    
    In this case,
    pertaining to one individual, Voldemort...
    
    ...or, as he was known then, Tom Riddle.
    
    This vial contains
    the most particular memory...
    
    ...of the day I first met him.
    
    I'd like you to see it, if you would.
    
    WOMAN: I admit some confusion
    upon receiving your letter, Mr. Dumbledore.
    
    In all the years Tom's been here,
    he's never once had a family visitor.
    
    There have been incidents
    with the other children. Nasty things.
    
    Tom, you have a visitor.
    
    How do you do, Tom?
    
    Don't.
    
    - You're the doctor, aren't you?
    - No.
    
    I am a professor.
    
    I don't believe you.
    
    She wants me looked at.
    
    They think I'm different.
    
    Well, perhaps they're right.
    
    I'm not mad.
    
    Hogwarts is not a place for mad people.
    
    Hogwarts is a school.
    
    A school of magic.
    
    You can do things, can't you, Tom?
    
    Things other children can't.
    
    I can make things move
    without touching them.
    
    I can make animals do what I want
    without training them.
    
    I can make bad things happen
    to people who are mean to me.
    
    I can make them hurt...
    
    ...if I want.
    
    Who are you?
    
    Well, I'm like you, Tom.
    
    I'm different.
    
    Prove it.
    
    I think there's something in your wardrobe
    trying to get out, Tom.
    
    Thievery is not tolerated at Hogwarts,
    Tom.
    
    At Hogwarts, you'll be taught not only
    how to use magic, but how to control it.
    
    You understand me?
    
    I can speak to snakes too.
    
    They find me.
    
    Whisper things.
    
    Is that normal for someone like me?
    
    Did you know, sir? Then?
    
    Did I know I'd just met the most
    dangerous dark wizard of all time? No.
    
    If I had, I...
    
    Over time, while here at Hogwarts...
    
    ...Tom Riddle grew close
    to one particular teacher.
    
    Can you guess
    who that teacher might be?
    
    You didn't bring Professor Slughorn back
    simply to teach Potions, did you?
    
    No, I did not.
    
    You see, Professor Slughorn possesses
    something I desire very dearly.
    
    And he will not give it up easily.
    
    You said Professor Slughorn
    would try to collect me.
    
    I did.
    
    Do you want me to let him?
    
    Yes.
    
    [RECORD SKIPPING]
    
    [CHATTERING]
    
    HARRY:
    All right. Um...
    
    This morning, I'm gonna be
    putting you all through a few drills...
    
    ...just to assess your strengths.
    
    Quiet! Please!
    
    Shut it!
    
    [CHATTERING STOPS]
    
    Thanks. All right. Um...
    
    Just because you
    made the team last year...
    
    ...does not guarantee you a spot this year.
    Is that clear?
    
    Good.
    
    [FLY BUZZING]
    
    No hard feelings, Weasley, all right?
    
    Hard feelings?
    
    Yeah, I'll be going out for Keeper as well.
    It's nothing personal.
    
    Really? Strapping guy like you?
    
    You've got more of a Beater's build,
    don't you think?
    
    Keepers need to be quick, agile.
    
    [BUZZING STOPS]
    
    Oh, I like my chances.
    
    Say, think you could introduce me
    to your friend Granger?
    
    Wouldn't mind getting on
    a first-name basis, know what I mean?
    
    MAN 1:
    Come on, Weasley!
    
    WOMAN: Come on, Ron!
    MAN 2: Go on, Weasley!
    
    MAN 3: Go on, Weasley!
    MAN 4: Yeah, Ron!
    
    MAN 5:
    Go on, Cormac!
    
    [GRUNTING]
    
    WOMAN:
    Come on, Ron!
    
    MAN 6:
    Come on, Ron.
    
    Come on, Ron.
    
    Confundus.
    
    Isn't he brilliant?
    
    I have to admit, I thought
    I was gonna miss that last one.
    
    I hope Cormac's not taking it too hard.
    
    He's got a bit of a thing for you,
    Hermione. Cormac.
    
    He's vile.
    
    HARRY: Have you ever heard of this spell?
    Sectumsempra?
    
    No, I haven't.
    
    And if you had a shred of self-respect,
    you'd hand that book in.
    
    Not bloody likely. He's top of the class.
    
    He's even better than you, Hermione.
    Slughorn thinks he's a genius.
    
    What?
    
    I'd like to know whose that book was.
    Let's have a look.
    
    No.
    
    HERMIONE:
    Why not?
    
    The binding is fragile.
    
    HERMIONE: The binding is fragile?
    - Yeah.
    
    - Who's the Half-Blood Prince?
    - Who?
    
    That's what it says right here: 'This book
    is property of the Half-Blood Prince.'
    
    HERMIONE: For weeks you carry around
    this book, practically sleep with it...
    
    ...yet you have no desire to find out
    who he is?
    
    HARRY: I didn't say I wasn't curious,
    and I don't sleep with it.
    
    RON:
    Well, it's true.
    
    I like a nice chat before I go to bed.
    Now all you do is read that bloody book.
    
    It's just like being with Hermione.
    
    HERMIONE:
    Well, I was curious, so I went to...
    
    - The library.
    - The library. And?
    
    And nothing.
    
    I couldn't find a reference anywhere
    to a Half-Blood Prince.
    
    - There we go. That settles it, then.
    SLUGHORN: Filius!
    
    I was hoping to find you
    in the Three Broomsticks!
    
    No, emergency choir practice,
    I'm afraid, Horace.
    
    Does anyone fancy a Butterbeer?
    
    A chum of mine
    was sledging down Claxby Hill.
    
    We had a very long, homemade,
    Norwegian-style sledge...
    
    HARRY:
    No, not there. Over here.
    
    No, sit beside me.
    
    Okay.
    
    MAN:
    Something to drink?
    
    HERMIONE: Three Butterbeers,
    and some ginger in mine, please.
    
    [SLUGHORN SPEAKING
    INDISTINCTLY]
    
    Oh, bloody hell.
    
    Slick git.
    
    Honestly, Ronald,
    they're only holding hands.
    
    And snogging.
    
    - I'd like to leave.
    - What?
    
    You can't be serious.
    
    - That happens to be my sister.
    - So?
    
    What if she looked over here and saw you
    snogging me? You expect her to leave?
    
    SLUGHORN: Hey, my boy!
    HARRY: Hello, sir. Wonderful to see you.
    
    And you, and you.
    
    So, what brings you here?
    
    The Three Broomsticks and I go way back,
    further than I care to admit.
    
    I can remember
    when it was One Broomstick.
    
    All hands on deck, Granger.
    Listen, my boy, in the old days...
    
    ...I used to throw together
    the occasional supper party...
    
    ...for the select student or two.
    
    - Would you be game?
    - I'd consider it an honor, sir.
    
    You would be welcome too, Granger.
    
    - I'd be delighted, sir.
    - Splendid. Look for my owl.
    
    Good to see you, Wallenby.
    
    What are you playing at?
    
    Dumbledore's asked me
    to get to know him.
    
    - Get to know him?
    - I don't know.
    
    It must be important.
    If it wasn't, Dumbledore wouldn't ask.
    
    Got a little bit...
    
    LEANNE:
    Katie, you don't know what it could be.
    
    RON [WHISPERING]: Harry.
    HARRY: What?
    
    RON: Did you hear what she was saying
    back at the pub about me and her snogging?
    
    HARRY:
    As if.
    
    [LEANNE SCREAMS]
    
    I warned her.
    I warned her not to touch it.
    
    Don't get any closer.
    Get back, all of you.
    
    Do not touch that, except by the wrappings.
    Do you understand?
    
    You're sure Katie did not have this
    in her possession...
    
    ...when she entered
    the Three Broomsticks?
    
    It's like I said.
    
    She left to go to the loo, and when
    she came back she had the package.
    
    She said it was important
    that she deliver it.
    
    - Did she say to whom?
    - To Professor Dumbledore.
    
    Very well. Thank you, Leanne.
    You may go.
    
    Why is it when something happens
    it is always you three?
    
    Believe me, professor, I've been asking
    myself the same question for six years.
    
    McGONAGALL:
    Oh, Severus.
    
    What do you think?
    
    I think Miss Bell is lucky to be alive.
    
    She was cursed, wasn't she?
    
    I know Katie. Off the pitch,
    she wouldn't hurt a fly.
    
    If she was delivering that to Dumbledore,
    she wasn't doing it knowingly.
    
    Yes, she was cursed.
    
    It was Malfoy.
    
    That is a very serious accusation, Potter.
    
    Indeed.
    
    - Your evidence?
    - I just know.
    
    You just...
    
    ...know.
    
    You astonish with your gifts, Potter.
    
    Gifts mere mortals
    can only dream of possessing.
    
    How grand it must be
    to be the Chosen One.
    
    I suggest you go back to your dormitories.
    All of you.
    
    RON: What do you suppose
    Dean sees in her? Ginny?
    
    Well, what does she see in him?
    
    Dean? He's brilliant.
    
    You called him a slick git
    not five hours ago.
    
    Yeah, well, he was running his hands
    all over my sister, wasn't he?
    
    Something snaps, and you've gotta
    hate him, you know? On principle.
    
    I suppose.
    
    - So, what is it he sees in her?
    - I don't know.
    
    She's smart, funny.
    
    - Attractive.
    - Attractive?
    
    - You know, she's got nice skin.
    - Skin?
    
    Dean dates my sister
    because of her skin?
    
    Well, no, I mean, I'm just saying
    it could be a contributing factor.
    
    Hermione's got nice skin.
    
    Wouldn't you say? As skin goes, I mean.
    
    I've never really thought about it.
    
    But, I suppose, yeah.
    
    Very nice.
    
    - I think I'll be going to sleep now.
    - Right. Yeah.
    
    So tell me, Cormac, do you see anything
    of your Uncle Tiberius these days?
    
    CORMAC: Yes, sir. In fact,
    I'm meant to go hunting with him...
    
    ...and the Minister for Magic
    over the holidays.
    
    Well, be sure to give them both my best.
    
    What about your uncle, Belby?
    
    For those who don't know, Marcus'
    uncle invented the Wolfsbane Potion.
    
    - Is he working on anything new?
    - Don't know.
    
    Him and Dad don't get on. Probably
    because me dad says potions are rubbish.
    
    Says the only potion worth having
    is a stiff one at the end of the day.
    
    What about you, Miss Granger? What does
    your family do in the Muggle world?
    
    My parents are dentists.
    
    They tend to people's teeth.
    
    Fascinating. And is that considered
    a dangerous profession?
    
    HERMIONE:
    No.
    
    Although, one boy, Robbie Fenwick,
    did bite my father once.
    
    He needed 10 stitches.
    
    [DOOR OPENS]
    
    Ah. Miss Weasley. Come in, come in.
    
    [WHISPERS] Look at her eyes.
    They've been fighting again, her and Dean.
    
    Sorry. I'm not usually late.
    
    No matter. You're just in time for dessert,
    that is, if Belby's left you any.
    
    [LAUGHS]
    
    HARRY:
    What?
    
    Nothing.
    
    SLUGHORN:
    Goodbye. Bye-bye.
    
    - Potter.
    - I'm sorry, sir.
    
    I was just admiring your hourglass.
    
    SLUGHORN:
    Oh, yes.
    
    A most intriguing object.
    
    The sand runs in accordance
    with the quality of the conversation.
    
    If it is stimulating, the sand runs slowly.
    
    - lf it is not...
    - I think I'll be going.
    
    Nonsense.
    You have nothing to fear, dear boy.
    
    As to some of your classmates...
    
    ...well, let's just say they're unlikely
    to make the shelf.
    
    The shelf, sir?
    
    Anyone who aspires to be anyone
    hopes to end up here.
    
    But then again, you already are someone,
    aren't you, Harry?
    
    Did Voldemort ever make the shelf, sir?
    
    You knew him, didn't you, sir, Tom Riddle?
    You were his teacher.
    
    Mr. Riddle had a number of teachers
    whilst here at Hogwarts.
    
    What was he like?
    
    I'm sorry, sir. Forgive me.
    
    He killed my parents.
    
    Of course.
    
    It's only natural
    you should want to know more.
    
    But I'm afraid I must disappoint you,
    Harry.
    
    When I first met Mr. Riddle,
    he was a quiet...
    
    ...albeit brilliant, boy committed
    to becoming a first-rate wizard.
    
    Not unlike others I've known.
    
    Not unlike yourself, in fact.
    
    If the monster existed...
    
    ...it was buried deep within.
    
    Good luck, eh, Ron.
    
    MAN 1: Nice hat!
    MAN 2: Ron, you're a loser.
    
    I'm counting on you, Ron.
    I have two Galleons on Gryffindor, yeah?
    
    WOMAN: Looking good, Ron.
    MAN 3: Loser!
    
    What's he wearing?
    
    RON:
    So how was it, then?
    
    - How was what?
    - Your dinner party?
    
    HERMIONE:
    Pretty boring, actually.
    
    Though I think Harry enjoyed dessert.
    
    Slughorn's having a Christmas do,
    you know.
    
    And we're meant to bring someone.
    
    I expect you'll be bringing McLaggen.
    He's in the Slug Club, isn't he?
    
    - Actually, I was going to ask you.
    RON: Really?
    
    Good luck today, Ron.
    
    I know you'll be brilliant.
    
    I'm resigning. After today's match,
    McLaggen can have my spot.
    
    HARRY:
    Have it your way.
    
    - Juice?
    - Sure.
    
    Hello, everyone.
    
    You look dreadful, Ron.
    
    Is that why you put something
    in his cup?
    
    Is it a tonic?
    
    HERMIONE:
    Liquid luck.
    
    Don't drink it, Ron.
    
    - You could be expelled for that.
    - I don't know what you're talking about.
    
    Come on, Harry.
    We've got a game to win.
    
    [CROWD CHEERING]
    
    Yes!
    
    MAN:
    Go on, Ron! Do it!
    
    [CROWD CHEERING]
    
    CROWD [CHANTING]:
    Weasley! Weasley! Weasley!
    
    Yes!
    
    Weasley! Weasley! Weasley!
    
    Whoo!
    
    Yes. Whoo!
    
    Weasley! Weasley! Weasley!
    
    You really shouldn't have done it.
    
    I know. I suppose I could've
    just used a Confundus Charm.
    
    That was different. That was tryouts.
    This was an actual game.
    
    You didn't put it in.
    
    Ron only thought you did.
    
    [CROWD CHEERING]
    
    [HERMIONE SNIFFLING]
    
    [BIRDS CHIRPING]
    
    Charms spell. I'm just practicing.
    
    Well, they're really good.
    
    How does it feel, Harry?
    
    When you see Dean with Ginny?
    
    I know.
    
    I see the way you look at her.
    
    You're my best friend.
    
    [LAVENDER LAUGHING]
    
    Oops.
    
    I think this room's taken.
    
    What's with the birds?
    
    Oppugno.
    
    It feels like this.
    
    Look, I can't help it
    if she's got her knickers in a twist.
    
    What Lav and I have, well,
    let's just say, there's no stopping it.
    
    It's chemical.
    
    Will it last? Who knows?
    Point is, I'm a free agent.
    
    HERMIONE: He's at perfect liberty to kiss
    whoever he likes. I really couldn't care less.
    
    Was I under the impression he and I would
    be attending Slughorn's Christmas party?
    
    Yes.
    
    Now, given the circumstances,
    I've had to make other arrangements.
    
    Have you?
    
    Yes. Why?
    
    I just thought, seeing as neither of us
    can go with who we'd really like to...
    
    ...we should go together, as friends.
    
    Why didn't I think of that?
    
    Who are you going with?
    
    Um, it's a surprise.
    
    Anyway, it's you we've got to worry about.
    You can't just take anyone.
    
    See that girl over there?
    
    That's Romilda Vane. Apparently she's
    trying to smuggle you a love potion.
    
    Really?
    
    Hey! She's only interested in you because
    she thinks you're the Chosen One.
    
    But I am the Chosen One.
    
    Okay, sorry. Um, kidding.
    
    I'll ask someone I like.
    
    Someone cool.
    
    LUNA:
    I've never been to this part of the castle.
    
    At least not while awake.
    I sleepwalk, you see.
    
    That's why I wear shoes to bed.
    
    Harmonia Nectere Passus.
    
    Drink?
    
    Neville.
    
    I didn't get into the Slug Club.
    
    It's okay, though. He's got Belby
    handing out towels in the loo.
    
    - Oh, well, I'm fine, mate. Thanks.
    - Okay.
    
    Hermione. What are you doing?
    And what happened to you?
    
    I've just escaped.
    I mean, left Cormac under the mistletoe.
    
    Cormac? That's who you invited?
    
    I thought it would annoy Ron the most.
    
    SLUGHORN:
    Thank you. I'll catch up with you later.
    
    He's got more tentacles
    than a Snarfalump plant.
    
    - Dragon tartare?
    - No, I'm fine. Thank you.
    
    Just as well.
    They give one horribly bad breath.
    
    On second thoughts...
    
    Might keep Cormac at bay.
    
    Oh, God, here he comes.
    
    I think she just went to powder her nose.
    
    CORMAC:
    Slippery little minx, your friend.
    
    Likes to work her mouth too,
    doesn't she?
    
    What is this I'm eating, by the way?
    
    Dragon balls.
    
    [VOMITS]
    
    You've just bought yourself
    a month's detention, McLaggen.
    
    Not so quick, Potter.
    
    Sir, I really think I should
    rejoin the party. My date...
    
    Can surely survive your absence
    for another minute or two.
    
    Besides, I only wish
    to convey a message.
    
    - A message?
    - From Professor Dumbledore.
    
    He asked me to give you his best,
    and he hopes you enjoy your holiday.
    
    You see...
    
    ...he's traveling, and he won't
    return until term resumes.
    
    Traveling where?
    
    Take your hands off me, you filthy Squib!
    
    FILCH:
    Professor Slughorn, sir.
    
    I just discovered this boy
    lurking in an upstairs corridor.
    
    He claims to have been
    invited to your party.
    
    Okay, okay. I was gatecrashing. Happy?
    
    I'll escort him out.
    
    Certainly, professor.
    
    All right, everyone, carry on, carry on.
    
    DRACO: Maybe I did hex that Bell girl.
    Maybe I didn't. What's it to you?
    
    SNAPE:
    I swore to protect you.
    
    I made the Unbreakable Vow.
    
    DRACO:
    I don't need protection.
    
    I was chosen for this.
    Out of all others. Me.
    
    - And I won't fail him.
    - You're afraid, Draco.
    
    You attempt to conceal it, but it's obvious.
    Let me assist you.
    
    DRACO:
    No!
    
    I was chosen. This is my moment.
    
    RON:
    'Unbreakable Vow.'
    
    You're sure that's what Snape said?
    
    Positive. Why?
    
    Well, it's just you can't break
    an Unbreakable Vow.
    
    I'd worked that much out for myself,
    funnily enough.
    
    You don't understand.
    
    Oh, bloody hell.
    
    I miss you.
    
    Lovely.
    
    All she wants to do is snog me.
    My lips are getting chapped. Look.
    
    I'll take your word for it.
    
    So, what happens to you? What happens
    if you break an Unbreakable Vow?
    
    You die.
    
    WOMAN:
    Wait, the pudding's still here.
    
    REMUS: Voldemort has chosen
    Draco Malfoy for a mission?
    
    I know it sounds mad.
    
    Has it occurred to you Snape was
    simply pretending to offer Draco help...
    
    ...so he could find out
    what he was up to?
    
    - That's not what it sounded like.
    TONKS: Perhaps Harry's right, Remus.
    
    To make an Unbreakable Vow, it's...
    
    It comes down to whether or not
    you trust Dumbledore's judgment.
    
    - Dumbledore trusts Snape, therefore I do.
    - Dumbledore can make mistakes.
    
    You're blinded by hatred.
    
    - I'm not.
    - Yes, you are.
    
    People are disappearing, Harry, daily.
    
    We place our trust
    in a handful of people.
    
    If we start fighting amongst ourselves,
    we're doomed.
    
    Open up, you.
    
    Don't you trust me?
    
    It's good.
    
    RON:
    Yeah, I'll just... Get... Yeah.
    
    - Pie?
    - Not for me, no.
    
    ARTHUR:
    You'll have to forgive Remus.
    
    It takes its toll, his condition.
    
    HARRY:
    Are you all right, Mr. Weasley?
    
    We're being followed, all of us.
    
    Most days,
    Molly doesn't leave the house.
    
    It's not been easy.
    
    Did you get my owl?
    
    Yes, I did.
    
    If Dumbledore's traveling,
    then that's news to the Ministry...
    
    ...but perhaps that's the way
    Dumbledore wants it.
    
    As for Draco Malfoy...
    
    ...I know a bit more.
    
    - Go on.
    - I sent an agent to Borgin and Burkes.
    
    I think, from what you described...
    
    ...what you and Ron saw in summer...
    
    ...the object
    that Draco is so interested in...
    
    ...is a vanishing cabinet.
    
    A vanishing cabinet?
    
    They were all the rage
    when Voldemort first rose to power.
    
    You can see the appeal.
    Should Death Eaters come knocking...
    
    ...one simply had to slip inside
    and disappear for an hour or two.
    
    They can transport you anywhere.
    
    Tricky contraptions though,
    very temperamental.
    
    What happened to it?
    The one at Borgin and Burkes?
    
    Nothing.
    
    It's still there.
    
    TONKS:
    It was delicious, Molly, really.
    
    MOLLY:
    Are you sure you won't stay?
    
    No, we should go. The first night
    of the cycle's always the worst.
    
    Remus?
    
    Sweetheart.
    
    Has Ron gone to bed?
    
    Um... Not yet. No.
    
    Shoelace.
    
    Merry Christmas, Harry.
    
    Merry Christmas.
    
    - Harry, no!
    - Remus!
    
    Ginny!
    
    BELLATRIX: I killed Sirius Black!
    I killed Sirius Black!
    
    You coming to get me?
    
    Harry, can you get me?
    You coming to get me?
    
    Harry?
    
    Stupefy!
    
    ARTHUR:
    Harry!
    
    Ginny!
    
    Molly.
    
    HERMIONE:
    It's easy for them to get to you.
    
    You're bloody lucky you weren't killed.
    You have to realize who you are, Harry.
    
    I know who I am, Hermione, all right?
    
    Sorry.
    
    Lav, come on. Of course I'll wear it.
    
    That's my Won-Won.
    
    Excuse me, I have to go and vomit.
    
    SLUGHORN: I'd like to know
    where you get your information.
    
    More knowledgeable
    than half the staff, you are.
    
    Sir...
    
    ...is it true
    that Professor Merrythought is retiring?
    
    Now, Tom.
    I couldn't tell you if I knew, could I?
    
    By the way, thank you for the pineapple.
    You're quite right, it is my favorite.
    
    But how did you know?
    
    Intuition.
    
    [CLOCK CHIMING]
    
    SLUGHORN:
    Gracious. Is it that time already?
    
    Off you go, boys, or Professor Dippet
    will have us all in detention.
    
    Look sharp, Tom. Don't want to be caught
    out of bed after hours.
    
    - Is something on your mind, Tom?
    - Yes, sir.
    
    You see, I couldn't think
    of anyone else to go to.
    
    The other professors,
    well, they're not like you.
    
    They might misunderstand.
    
    Go on.
    
    I was in the library the other night...
    
    ...in the Restricted Section...
    
    ...and I read something rather odd
    about a bit of rare magic.
    
    And I thought perhaps
    you could illuminate me.
    
    It's called, as I understand it...
    
    [RIDDLE SPEAKS INDISTINCTLY]
    
    I beg your pardon?
    
    I don't know anything about such things,
    and if I did, I wouldn't tell you!
    
    Now, get out of here at once, and don't
    let me ever catch you mentioning it again!
    
    DUMBLEDORE:
    Confused?
    
    I'd be surprised if you weren't.
    
    Well, I don't understand.
    What happened?
    
    This is perhaps the most important
    memory I've collected.
    
    It is also a lie.
    
    This memory has been tampered with...
    
    ...by the same person whose memory it is,
    our old friend, Professor Slughorn.
    
    But why would he tamper
    with his own memory?
    
    - I suspect he's ashamed of it.
    - Why?
    
    Why, indeed?
    
    I asked you to get to know
    Professor Slughorn, and you have done so.
    
    Now I want you to persuade him
    to divulge his true memory...
    
    ...any way you can.
    
    I don't know him that well, sir.
    
    This memory is everything.
    
    Without it, we are blind.
    
    Without it, we leave the fate
    of our world to chance.
    
    You have no choice.
    
    You must not fail.
    
    SLUGHORN: So I'd highly recommend
    you reacquaint yourself...
    
    ...with the chapter on antidotes.
    
    I'll tell you more about bezoars
    in our next class. Right, off you go.
    
    Alys, don't forget your rat tail.
    
    Aha. If it isn't
    the Prince of Potions himself.
    
    To what do I owe this pleasure?
    
    Sir, I wondered
    if I might ask you something.
    
    Ask away, dear boy, ask away.
    
    The other day I was in the library,
    in the Restricted Section...
    
    ...and I came across something rather odd
    about a very rare piece of magic.
    
    Yes. And what was this
    rare piece of magic?
    
    Well, I don't know.
    I can't remember the name exactly.
    
    It got me wondering, are there some kinds
    of magic you're not allowed to teach us?
    
    SLUGHORN:
    I'm Potions Master, Harry.
    
    I think your question'd
    better be posed to Professor Snape.
    
    HARRY:
    Yes. Um...
    
    He and I don't exactly
    see eye to eye, sir.
    
    What I mean to say is...
    
    ...well, he's not like you.
    
    He might misunderstand.
    
    Yes. There can be no light
    without the dark.
    
    And so it is with magic. Myself, I always
    strive to live within the light.
    
    I suggest you do the same.
    
    Is that what you told Tom Riddle,
    when he came asking questions?
    
    Dumbledore put you up to this,
    didn't he?
    
    Didn't he?
    
    [KNOCKING]
    
    Yes?
    
    Oh, it's you, Potter.
    
    I'm sorry, I'm busy at the moment.
    
    It's beautiful, isn't it? The moon.
    
    HARRY:
    Divine.
    
    Had ourselves a little
    late-night snack, did we?
    
    It was on your bed, the box.
    I just thought I'd try one.
    
    HARRY: Or 20.
    - I can't stop thinking about her, Harry.
    
    Honestly, I reckoned
    she was annoying you.
    
    She could never annoy me.
    
    I think I love her.
    
    Well, brilliant.
    
    Do you think she knows I exist?
    
    I hope so. She's been snogging you
    for three months.
    
    Snogging? Who are you talking about?
    
    Who are you talking about?
    
    Romilda, of course. Romilda Vane.
    
    Okay, very funny.
    
    - What was that for?
    - It's no joke! I'm in love with her!
    
    Fine, you're in love with her.
    Have you ever actually met her?
    
    No. Can you introduce me?
    
    Come on, Ron. I'm gonna introduce you
    to Romilda Vane.
    
    [KNOCKING]
    
    I'm sorry, sir. I wouldn't bother you
    if it weren't absolutely essential.
    
    RON:
    Where's Romilda?
    
    What's the matter with Wenby?
    
    HARRY [WHISPERS]:
    Very powerful love potion.
    
    SLUGHORN:
    Very well. Better bring him in.
    
    I'd have thought you could whip up
    a remedy for this in no time, Harry.
    
    Well, I thought this called
    for a more practiced hand, sir.
    
    Hello, darling. Fancy a drink?
    
    Perhaps you're right.
    
    HARRY: I'm sorry, by the way, professor,
    about earlier today, our misunderstanding.
    
    Oh, not at all. All water
    under the bridge, you know? Correct?
    
    I expect you're tired of it
    after all these years.
    
    All the questions about Voldemort.
    
    Don't use that name.
    
    [THUDS]
    
    SLUGHORN:
    There you are, old boy. Bottoms up.
    
    - What's this?
    SLUGHORN: Tonic for the nerves.
    
    - What happened to me?
    - Love potion.
    
    A bloody strong one at that.
    
    - I feel really bad.
    SLUGHORN: You need a pick-me-up, my boy.
    
    Got Butterbeer,
    wine, dazzling oak-matured mead.
    
    I had other intentions for this,
    but I think, given the circumstances...
    
    Here we are, Potter.
    
    To life!
    
    HARRY:
    Ron.
    
    Ron. Professor, do something.
    
    SLUGHORN:
    I don't understand.
    
    HARRY:
    Come on, Ron, breathe.
    
    [COUGHING]
    
    These girls, they're gonna kill me.
    
    Quick thinking on your part, Harry,
    using a bezoar.
    
    You must be very proud
    of your student, Horace.
    
    Hm? Oh, yes, very proud.
    
    I think we agree,
    Potter's actions were heroic.
    
    The question is,
    why were they necessary?
    
    DUMBLEDORE:
    Why, indeed?
    
    This appears to be a gift, Horace.
    
    You don't remember
    who gave you this bottle?
    
    Which, by the way, possesses remarkably
    subtle hints of licorice and cherry...
    
    ...when not polluted with poison.
    
    SLUGHORN: Actually I had intended
    to give it as a gift myself.
    
    To whom, I might ask?
    
    To you, Headmaster.
    
    LAVENDER:
    Where is he?
    
    Where's my Won-Won?
    Has he been asking for me?
    
    What's she doing here?
    
    I might ask you the same question.
    
    I happen to be his girlfriend.
    
    I happen to be his friend.
    
    Don't make me laugh.
    You haven't spoken in weeks.
    
    I suppose you want to make up
    now that he's all interesting.
    
    He's been poisoned, you daft dimbo!
    
    And for the record,
    I've always found him interesting.
    
    Ah. See? He senses my presence.
    
    Don't worry, Won-Won. I'm here.
    
    I'm here.
    
    [MUMBLES]
    
    RON:
    Uh... Hermione...
    
    Hermione.
    
    [LAVENDER SOBBING]
    
    Oh, to be young,
    and to feel love's keen sting.
    
    Well, come away, everybody.
    
    Mr. Weasley is well tended.
    
    About time, don't you think?
    
    Thank you.
    
    Oh, shut up.
    
    [BIRD CHIRPING]
    
    [THUDDING]
    
    [DRACO SOBBING]
    
    Stop it, Ron. You're making it snow.
    
    Tell me how I broke up
    with Lavender again.
    
    HERMIONE:
    Um, well...
    
    ...she came to visit you
    in the hospital.
    
    And you talked.
    
    I don't believe it was
    a particularly long conversation.
    
    Don't get me wrong, I'm bloody thrilled
    to be shot of her.
    
    It's just she seems a bit put out.
    
    Yes, she does, doesn't she?
    
    You say you don't remember
    anything from that night?
    
    Anything at all?
    
    There is something.
    
    But it can't be.
    I was completely boggled, wasn't I?
    
    Right. Boggled.
    
    HERMIONE:
    Harry.
    
    That's Katie.
    
    Katie Bell.
    
    Katie. How are you?
    
    I know you're going to ask, Harry,
    but I don't know who cursed me.
    
    I've been trying to remember, honestly.
    
    But I just can't.
    
    Katie?
    
    [SOBBING]
    
    HARRY: I know what you did, Malfoy.
    You hexed her, didn't you?
    
    [GRUNTING]
    
    Sectumsempra!
    
    SNAPE:
    Vulnera Sanentur.
    
    Vulnera Sanentur.
    
    You have to get rid of it. Today.
    
    Take my hand.
    
    The Room of Requirement.
    
    GINNY: We need to hide
    the Half-Blood Prince's book...
    
    ...where no one will ever find it,
    including you.
    
    [RUSTLING]
    
    - What was that?
    - What was that?
    
    [RUSTLING CONTINUES]
    
    See?
    
    You never know what you'll find up here.
    
    All right, close your eyes.
    That way you can't be tempted.
    
    Close your eyes.
    
    That can stay hidden up here too,
    if you like.
    
    So did you and Ginny do it, then?
    
    What?
    
    You know, hide the book?
    
    Oh, yeah.
    
    Ah. Dear, yes.
    
    Still no luck with Slughorn, then,
    I take it?
    
    Luck.
    
    That's it. All I need's a bit of luck.
    
    HERMIONE:
    Well, how do you feel?
    
    Excellent.
    
    Really excellent.
    
    Remember...
    
    ...Slughorn usually eats early...
    
    ...takes a walk,
    and then returns to his office.
    
    Right.
    
    - I'm going down to Hagrid's.
    - What?
    
    No, Harry, you've got to go
    and speak to Slughorn.
    
    - We have a plan.
    HARRY: I know...
    
    ...but I've got a
    good feeling about Hagrid's.
    
    I feel it's the place to be tonight.
    Do you know what I mean?
    
    - No.
    - Well, trust me, I know what I'm doing.
    
    Or Felix does.
    
    Hi!
    
    [GRUNTS]
    
    Merlin's beard, Harry!
    
    Sorry, sir. I should've announced myself.
    Cleared my throat, coughed.
    
    You probably feared
    I was Professor Sprout.
    
    Yes, I did, actually.
    What makes you think that?
    
    Well, just the general behavior, sir.
    
    The sneaking around,
    the jumping when you saw me.
    
    Are those Tentacula leaves, sir?
    They're very valuable, aren't they?
    
    Ten Galleons a leaf to the right buyer.
    
    Not that I'm familiar with any such
    transactions, but one does hear rumors.
    
    My own interests
    are purely academic, of course.
    
    Personally, these plants
    always kind of freaked me out.
    
    SLUGHORN:
    How did you get out of the castle, Harry?
    
    HARRY:
    Through the front door, sir.
    
    I'm off to Hagrid's.
    He's a very dear friend...
    
    ...and I fancied paying him a visit.
    
    So if you don't mind,
    I will be going now.
    
    Harry!
    
    - Sir?
    - It's nearly nightfall.
    
    Surely you realize I can't allow you
    to go roaming the grounds by yourself.
    
    Well, then, by all means, come along, sir.
    
    SLUGHORN: Harry, I must insist
    you accompany me...
    
    ...back to the castle immediately!
    
    HARRY:
    That would be counterproductive, sir.
    
    And what makes you say that?
    
    No idea.
    
    Horace.
    
    Merlin's beard.
    Is that an actual Acromantula?
    
    A dead one, I think, sir.
    
    Good God.
    
    Dear fellow,
    however did you manage to kill it?
    
    Kill it? Me oldest friend, he was.
    
    - I'm so sorry, I didn't...
    - Don't worry yourself, you're not alone.
    
    Seriously misunderstood creatures,
    spiders are.
    
    It's the eyes, I reckon.
    They unnerve some folk.
    
    Not to mention the pincers.
    
    [CLICKING TONGUE]
    
    Yeah, I reckon that too.
    
    Hagrid, the last thing
    I wish to be is indelicate...
    
    ...but Acromantula venom
    is uncommonly rare.
    
    Would you allow me
    to extract a vial or two?
    
    Purely for academic purposes,
    you understand.
    
    Well, I don't suppose it's going
    to do him much good now, is it?
    
    My thoughts exactly.
    
    Always have a ampoule or two about
    my person forjust such occasions as this.
    
    Old Potions Master's habit, you know.
    
    I wish you could've seen him
    in his prime.
    
    Magnificent, he was. Just magnificent.
    
    Oh, dear.
    
    - Would you like me to say a few words?
    - Yes.
    
    He had a family, I trust?
    
    Oh, yeah.
    
    Farewell...
    
    Aragog.
    
    Farewell, Aragog...
    
    ...king of the arachnids.
    
    Your body will decay...
    
    ...but your spirit lingers on.
    
    And your human friends find solace
    in the loss they have sustained.
    
    [SLUGHORN & HAGRID SINGING]
    
    I had him from an egg, you know.
    Tiny little thing he was when he hatched.
    
    No bigger than a Pekinese.
    A Pekinese, mind you.
    
    How sweet. I once had a fish. Francis.
    He was very dear to me.
    
    One afternoon I came downstairs,
    and he'd vanished.
    
    Poof.
    
    - That's very odd, isn't it?
    - It is, isn't it?
    
    But that's life, I suppose.
    
    You go along and then suddenly, poof!
    
    - Poof.
    - Poof.
    
    [HAGRID SNORING]
    
    It was a student who gave me Francis.
    
    One spring afternoon
    I discovered a bowl on my desk...
    
    ...with just a few inches
    of clear water in it.
    
    And floating on the surface
    was a flower petal.
    
    As I watched, it sank.
    
    Just before it reached the bottom...
    
    ...it transformed...
    
    ...into a wee fish.
    
    It was beautiful magic.
    
    Wondrous to behold.
    
    The flower petal had come from a lily.
    
    Your mother.
    
    The day I came downstairs...
    
    ...the day the bowl was empty...
    
    ...was the day your mother...
    
    I know why you're here.
    
    But I can't help you.
    
    It would ruin me.
    
    Do you know why I survived, professor?
    
    The night I got this?
    
    Because of her.
    
    Because she sacrificed herself.
    
    Because she refused to step aside.
    
    Because her love was more powerful
    than Voldemort.
    
    - Don't say his name.
    - I'm not afraid of the name, professor.
    
    I'm going to tell you something.
    
    Something others have only guessed at.
    
    It's true.
    
    I am the Chosen One.
    
    Only I can destroy him,
    but in order to do so...
    
    ...I need to know what Tom Riddle
    asked you years ago in your office...
    
    ...and I need to know what you told him.
    
    Be brave, professor.
    
    Be brave like my mother.
    
    Otherwise, you disgrace her.
    
    Otherwise, she died for nothing.
    
    Otherwise, the bowl
    will remain empty forever.
    
    Please, don't think badly of me
    when you see it.
    
    You've no idea what he was like,
    even then.
    
    RIDDLE:
    I was in the library the other night...
    
    ...in the Restricted Section...
    
    ...and I read something rather odd
    about a bit of rare magic.
    
    It's called, as I understand it...
    
    ...a Horcrux.
    
    - I beg your pardon?
    - Horcrux.
    
    I came across the term while reading...
    
    ...and I didn't fully understand it.
    
    I'm not sure what you were reading, Tom,
    but this is very dark stuff, very dark indeed.
    
    Which is...
    
    ...why I came to you.
    
    A Horcrux is an object in which a person
    has concealed part of their soul.
    
    But I don't understand
    how that works, sir.
    
    One splits one's soul and hides
    part of it in an object.
    
    By doing so, you're protected, should
    you be attacked and your body destroyed.
    
    Protected?
    
    That part of your soul
    that is hidden lives on.
    
    In other words, you cannot die.
    
    And how does one split his soul, sir?
    
    SLUGHORN: I think you already know
    the answer to that, Tom.
    
    Murder.
    
    Yes.
    
    Killing rips the soul apart.
    It is a violation against nature.
    
    RIDDLE: Can you only split the soul once?
    For instance, isn't seven...?
    
    Seven?
    
    Merlin's beard, Tom. Isn't it bad enough
    to consider killing one person?
    
    To rip the soul into seven pieces...
    
    This is all hypothetical, isn't it, Tom?
    All academic?
    
    Of course, sir.
    
    It'll be our little secret.
    
    HARRY:
    Sir.
    
    This is beyond anything I imagined.
    
    You mean to say he succeeded, sir,
    in making a Horcrux?
    
    Oh, yes, he succeeded, all right.
    And not just once.
    
    What are they exactly?
    
    Could be anything.
    Most commonplace of objects.
    
    A ring, for example.
    
    Or a book.
    
    - Tom Riddle's diary.
    - It's a Horcrux, yes.
    
    Four years ago, when you saved
    Ginny's life...
    
    ...in the Chamber of Secrets,
    you brought me this.
    
    I knew this was
    a different kind of magic.
    
    Very dark, very powerful. But until tonight
    I had no idea just how powerful.
    
    - The ring?
    - Belonged to Voldemort's mother.
    
    Difficult to find.
    Even more difficult to destroy.
    
    But if you could find them all,
    if you did destroy each Horcrux...
    
    One destroys Voldemort.
    
    But how would you find them?
    They could be hidden anywhere.
    
    True. But magic, especially dark magic...
    
    ...leaves traces.
    
    It's where you've been going,
    isn't it, sir?
    
    - When you leave the school?
    - Yes.
    
    And I think perhaps
    I may have found another.
    
    But this time,
    I cannot hope to destroy it alone.
    
    Once again,
    I must ask too much of you, Harry.
    
    SNAPE: Have you ever considered
    that you ask too much...
    
    ...that you take too much for granted?
    
    Has it ever crossed your brilliant mind
    that I don't want to do this anymore?
    
    Whether it has or hasn't is irrelevant.
    
    I will not negotiate with you, Severus.
    You agreed. Nothing more to discuss.
    
    Oh, Harry.
    
    You need a shave, my friend.
    
    You know, at times,
    I forget how much you've grown.
    
    At times, I still see the small boy
    from the cupboard.
    
    Forgive my mawkishness, Harry.
    
    I'm an old man.
    
    You still look the same to me, sir.
    
    Just like your mother,
    you're unfailingly kind.
    
    A trait people never fail to undervalue,
    I'm afraid.
    
    The place to which we journey tonight
    is extremely dangerous.
    
    I promised you could accompany me,
    and I stand by that promise.
    
    But there is one condition:
    
    You must obey every command
    I give you, without question.
    
    Yes, sir.
    
    You do understand what I'm saying?
    
    Should I tell you to hide, you hide.
    
    Should I tell you to run, you run.
    
    Should I tell you to abandon me
    and save yourself, you must do so.
    
    Your word, Harry.
    
    My word.
    
    Take my arm.
    
    Sir, I thought you couldn't
    Apparate within Hogwarts.
    
    Well, being me has its privileges.
    
    DUMBLEDORE:
    This is the place.
    
    Oh, yes.
    
    This place has known magic.
    
    - Sir!
    - In order to gain passage...
    
    ...payment must be made.
    
    Payment intended
    to weaken any intruder.
    
    - You should've let me, sir.
    - No, Harry.
    
    Your blood's much more precious
    than mine.
    
    Voldemort will not have made it easy
    to discover his hiding place.
    
    He will have put certain defenses
    in position.
    
    Careful.
    
    There it is.
    
    The only question is,
    how do we get there?
    
    If you would, Harry.
    
    Do you think the Horcrux is in there, sir?
    
    Oh, yes.
    
    It has to be drunk.
    
    All of it has to be drunk.
    
    You remember the conditions on which
    I brought you with me?
    
    This potion might paralyze me.
    
    Might make me forget why I'm here.
    
    Might cause me so much pain
    that I beg for relief.
    
    You are not to indulge these requests.
    
    It's your job, Harry, to make sure
    I keep drinking this potion.
    
    Even if you have to force it
    down my throat.
    
    - Understood?
    - Why can't I drink it, sir?
    
    Because I am much older, much cleverer,
    and much less valuable.
    
    Your good health, Harry.
    
    Professor.
    
    Professor!
    
    [DUMBLEDORE GROANING]
    
    Harry.
    
    HARRY:
    Professor, can you hear me?
    
    Professor.
    
    No. Don't.
    
    You have to keep drinking,
    like you said. Remember?
    
    DUMBLEDORE: Stop.
    - It will stop. It will stop...
    
    ...but only if you keep drinking.
    - Please, don't make me.
    
    - I'm sorry, sir.
    - Please.
    
    - Kill me. Kill me!
    - No!
    
    DUMBLEDORE:
    It's my fault.
    
    It's all my fault.
    
    It's my fault.
    
    HARRY: Just one more, sir.
    One more, and then I promise...
    
    ...I promise I'll do what you say.
    
    - I promise.
    - No.
    
    Please.
    
    Harry.
    
    Water.
    
    You did it, sir.
    
    Look.
    
    Harry.
    
    Water.
    
    Aguamenti.
    
    DUMBLEDORE:
    Water.
    
    Lumos.
    
    [SPLASHING]
    
    Lumos Maxima!
    
    DUMBLEDORE:
    Harry.
    
    Sectumsempra!
    
    Harry.
    
    - Stupefy!
    DUMBLEDORE: Harry.
    
    DUMBLEDORE:
    Harry.
    
    Partis Temporus!
    
    [THUNDER CRASHING]
    
    Go to your houses. No dawdling.
    
    [TICKING]
    
    We need to get you to the hospital
    wing, sir, to Madam Pomfrey.
    
    No.
    
    Severus. Severus is who I need.
    
    Wake him. Tell him what happened.
    
    Speak to no one else.
    
    Severus, Harry.
    
    [DOOR OPENS AND CLOSES]
    
    Hide yourself below, Harry.
    
    Don't speak or be seen by anybody
    without my permission.
    
    Whatever happens,
    it's imperative you stay below.
    
    Harry, do as I say.
    
    [DOOR OPENS AND CLOSES]
    
    Trust me.
    
    Good evening, Draco.
    
    What brings you here
    on this fine spring evening?
    
    Who else is here? I heard you talking.
    
    DUMBLEDORE: I often talk aloud to myself.
    I find it extraordinarily useful.
    
    Have you been whispering
    to yourself, Draco?
    
    Draco...
    
    ...you are no assassin.
    - How do you know what I am?
    
    I've done things that would shock you.
    
    Like cursing Katie Bell and hoping that in
    return she'd bear a cursed necklace to me?
    
    Replacing a bottle of mead
    with one laced with poison?
    
    Forgive me, Draco.
    
    I cannot help feeling these actions
    are so weak...
    
    ...your heart can't really
    have been in them.
    
    He trusts me. I was chosen.
    
    DUMBLEDORE:
    Then I shall make it easy for you.
    
    Expelliarmus!
    
    DUMBLEDORE:
    Very good. Very good.
    
    [DOOR OPENS AND CLOSES]
    
    You're not alone.
    
    There are others.
    
    How?
    
    The vanishing cabinet
    in the Room of Requirement.
    
    - I've been mending it.
    DUMBLEDORE: Let me guess.
    
    It has a sister. A twin.
    
    In Borgin and Burkes.
    They form a passage.
    
    DUMBLEDORE:
    Ingenious.
    
    Draco...
    
    ...years ago, I knew a boy
    who made all the wrong choices.
    
    - Please let me help you.
    - I don't want your help!
    
    Don't you understand? I have to do this.
    
    I have to kill you.
    
    Or he's gonna kill me.
    
    Well, look what we have here.
    
    Well done, Draco.
    
    DUMBLEDORE:
    Good evening, Bellatrix.
    
    I think introductions
    are in order, don't you?
    
    BELLATRIX: Love to, Albus, but I'm afraid
    we're all on a bit of a tight schedule.
    
    Do it.
    
    GREYBACK: He doesn't have the stomach,
    just like his father.
    
    Let me finish him in my own way.
    
    BELLATRIX: No! The Dark Lord was clear,
    the boy is to do it.
    
    This is your moment. Do it.
    
    Go on, Draco.
    
    Now!
    
    SNAPE:
    No.
    
    DUMBLEDORE:
    Severus.
    
    Please.
    
    Avada Kedavra.
    
    [YELLS]
    
    Yeah!
    
    BELLATRIX:
    Hagrid! Hello?
    
    HARRY:
    Snape! He trusted you!
    
    [SQUEALING]
    
    SNAPE:
    Go on.
    
    Incarcerous.
    
    Fight back! You coward, fight back!
    
    SNAPE:
    No! He belongs to the Dark Lord.
    
    Sectumsempra!
    
    You dare use my own spells
    against me, Potter?
    
    Yes.
    
    I'm the Half-Blood Prince.
    
    [SOBBING]
    
    McGONAGALL:
    Potter...
    
    ...in light of what has happened...
    
    ...if you should have the need
    to talk to someone...
    
    You should know,
    Professor Dumbledore...
    
    ...you meant a great deal to him.
    
    HERMIONE:
    Do you think he would've done it?
    
    Draco?
    
    HARRY:
    No.
    
    No, he was lowering his wand.
    
    In the end, it was Snape.
    
    It was always Snape.
    
    And I did nothing.
    
    It's fake.
    
    Open it.
    
    'To the Dark Lord. I know I will be dead
    long before you read this...
    
    ...but I want you to know that it was I
    who discovered your secret.
    
    I have stolen the real Horcrux and intend
    to destroy it as soon as I can.
    
    I face death in the hope that
    when you meet your match...
    
    ...you will be mortal once more.
    
    R.A.B.'
    
    R.A.B.
    
    Don't know.
    
    But whoever they are,
    they have the real Horcrux.
    
    Which means it was all a waste.
    
    All of it.
    
    Ron's okay with it, you know.
    
    You and Ginny.
    
    But if I were you, when he's around,
    I'd keep the snogging to a minimum.
    
    HARRY:
    I'm not coming back, Hermione.
    
    I've got to finish
    whatever Dumbledore started.
    
    And I don't know where that'll lead me...
    
    ...but I'll let you and Ron know
    where I am when I can.
    
    I've always admired your courage, Harry.
    
    But sometimes, you can be really thick.
    
    You don't really think
    you're going to be able...
    
    ...to find all those Horcruxes
    by yourself, do you?
    
    You need us, Harry.
    
    HARRY: I never realized
    how beautiful this place was.";
    $HP7 = "These are dark times, there is no denying.
    
    Our world has, perhaps,
    faced no greater threat than it does today.
    
    But I say this to our citizenry:
    
    We, ever your servants...
    
    ...will continue to defend your liberty...
    
    ...and repel the forces
    that seek to take it from you.
    
    Your Ministry remains...
    
    ...strong.
    
    Hermione. Tea's ready, darling.
    
    Coming, Mom.
    
    Come on, Dudley, hurry up.
    
    I still don't understand
    why we have to leave.
    
    Because, unh,
    it's not safe for us here anymore.
    
    Ron, tell your father
    supper's nearly ready.
    
    Is this in Australia?
    
    Looks wonderful, doesn't it?
    
    Three and a half thousand
    kilometers along Australia's east coast.
    
    Obliviate.
    
    Severus.
    
    I was beginning to worry
    you had lost your way.
    
    Come, we've saved you a seat.
    
    You bring news, I trust?
    
    It will happen Saturday next, at nightfall.
    
    I've heard differently, my Lord.
    
    Dawlish, the Auror,
    has let slip that the Potter boy...
    
    ...will not be moved
    until the 30th of this month.
    
    The day before he turns 17.
    
    This is a false trail.
    
    The Auror Office no longer plays any part
    in the protection of Harry Potter.
    
    Those closest to him believe
    we have infiltrated the Ministry.
    
    Well, they got that right, haven't they?
    
    What say you, Pius?
    
    One hears many things, my Lord.
    
    Whether the truth is among them
    is not clear.
    
    Heh. Spoken like a true politician.
    
    You will, I think,
    prove most useful, Pius.
    
    - Where will he be taken, the boy?
    - To a safe house.
    
    Most likely the home of someone
    in the Order.
    
    I'm told it's been given
    every manner of protection possible.
    
    Once there,
    it will be impractical to attack him.
    
    Ahem. My Lord.
    I'd like to volunteer myself for this task.
    
    I want to kill the boy.
    
    Wormtail!
    
    Have I not spoken to you
    about keeping our guest quiet?
    
    Yes, my Lord.
    
    Right away, my Lord.
    
    As inspiring
    as I find your bloodlust, Bellatrix...
    
    ...I must be the one to kill Harry Potter.
    
    But I face an unfortunate complication.
    
    That my wand and Potter's
    share the same core.
    
    They are, in some ways, twins.
    
    We can wound,
    but not fatally harm one another.
    
    If I am to kill him...
    
    ...I must do it with another's wand.
    
    Come,
    surely one of you would like the honor?
    
    Mm?
    
    What about you, Lucius?
    
    My Lord?
    
    'My Lord?'
    
    I require your wand.
    
    Do I detect elm?
    
    Yes, my Lord.
    
    And the core?
    
    Dragon. Ahem.
    
    Dragon heartstring, my Lord.
    
    - Dragon heartstring.
    - Mm.
    
    To those of you who do not know...
    
    ...we are joined tonight
    by Miss Charity Burbage...
    
    ...who, until recently, taught at Hogwarts
    School of Witchcraft and Wizardry.
    
    Her specialty was Muggle Studies.
    
    It is Miss Burbage's belief
    that Muggles are not so different from us.
    
    She would, given her way...
    
    ...have us mate with them.
    
    To her, the mixture of magical
    and Muggle blood is not an abomination...
    
    ...but something to be encouraged.
    
    Severus.
    
    Severus, please.
    
    We're friends.
    
    Avada Kedavra!
    
    Nagini.
    
    Dinner.
    
    - Hello, Harry.
    - All right. Wow.
    
    Hello.
    
    - You're looking fit.
    - Yeah, he's absolutely gorgeous.
    
    What say we get undercover
    before someone murders him?
    
    Evening.
    
    I thought you were
    looking after the Prime Minister.
    
    You are more important.
    
    - Hello, Harry. Bill Weasley.
    - Oh. Pleasure to meet you.
    
    - He was never always this handsome.
    - Dead ugly.
    
    True enough.
    
    Owe it all to a werewolf,
    name of Greyback.
    
    - Hope to repay the favor one day.
    - You're still beautiful to me, William.
    
    Just remember, Fleur,
    Bill takes his steaks on the raw side now.
    
    My husband, the joker.
    
    By the way, wait till you hear the news.
    Remus and I--
    
    All right. We'll have time
    for a cozy catch-up later.
    
    We've got to get the hell out of here.
    And soon.
    
    Potter, you're underage, which means
    you've still got the Trace on you.
    
    What's the Trace?
    
    If you sneeze, the Ministry will know
    who wipes your nose.
    
    We have to use those means of transport
    the Trace can't detect:
    
    Brooms, Thestrals and the like.
    We go in pairs.
    
    That way, if anyone's out there waiting
    for us, and I reckon there will be...
    
    ...they won't know which Harry Potter
    is the real one.
    
    The real one?
    
    I believe you're familiar
    with this particular brew.
    
    No. Absolutely not.
    
    I told you he'd take it well.
    
    No, if you think I'm gonna let everyone
    risk their lives for me, I--
    
    - Never done that before, have we?
    - No. No. This is different.
    
    I mean, taking that, becoming me. No.
    
    Well, none of us really fancy it, mate.
    
    Imagine if something went wrong, and
    we ended up a scrawny, specky git forever.
    
    Everyone here is of age, Potter.
    
    They've all agreed to take the risk.
    
    Technically, I've been coerced.
    
    Mundungus Fletcher, Mr. Potter.
    
    - Always been a huge admirer.
    - Nip it, Mundungus.
    
    All right, Granger, as discussed.
    
    - Blimey, Hermione.
    - Straight in here, if you please.
    
    For those of you who haven't taken
    Polyjuice Potion before, fair warning:
    
    It tastes like goblin piss.
    
    Have a lot of experiences with that,
    do you, Mad-Eye?
    
    Just trying to diffuse the tension.
    
    Oh.
    
    Ugh.
    
    Wow, we're identical.
    
    Not yet, you're not.
    
    Haven't got anything
    a bit more sporting, have you?
    
    I don't really fancy this color.
    
    Well, fancy this, you're not you.
    So shut it and strip.
    
    All right, all right.
    
    You'll need to change too, Potter.
    
    Bill, look away. I'm hideous.
    
    I knew she was lying about that tattoo.
    
    Harry, your eyesight really is awful.
    
    Right, then. We'll be pairing off.
    Each Potter will have a protector.
    
    Mundungus, stick tight to me.
    I wanna keep an eye on you.
    
    - As for Harry--
    - Yes?
    
    The real Harry.
    
    - Where the devil are you, anyway?
    - Here.
    
    You'll ride with Hagrid.
    
    I brought you here 16 years ago when
    you were no bigger than a Bowtruckle.
    
    Seems only right that I should be
    the one to take you away now.
    
    Yes, it's all very touching. Let's go.
    
    Head for the Burrows.
    We'll rendezvous there.
    
    On the count of three.
    
    Hold tight, Harry.
    
    One...
    
    ...two...
    
    ...three!
    
    - Which one?
    - Where are you?
    
    He's on your right!
    
    He's over there!
    
    Down!
    
    Hagrid, we have to help the others!
    
    I can't do that, Harry. Mad-Eye's orders.
    
    Hang on.
    
    Stupefy!
    
    Hang on, Harry.
    
    Hagrid.
    
    No. No.
    
    Harry.
    
    Harry. Hagrid.
    
    What happened? Where are the others?
    
    Is no one else back?
    
    They were on us right from
    the start, Molly. We didn't stand a chance.
    
    Well, thank goodness
    you two are all right.
    
    The Death Eaters were
    waiting for us. It was an ambush.
    
    Ron and Tonks
    should've already been back.
    
    Dad and Fred as well.
    
    Here!
    
    Quick. Into the house.
    
    Oh, my boy.
    
    Oh. Oh.
    
    - Lupin!
    - What are you doing?
    
    What creature sat in the corner...
    
    ...the first time Harry Potter
    visited my office in Hogwarts?
    
    - Are you mad?
    - What creature?!
    
    A Grindylow.
    
    We've been betrayed.
    
    Voldemort knew
    you were being moved tonight.
    
    I had to make sure
    you weren't an impostor.
    
    Wait.
    
    The last words Albus Dumbledore spoke
    to the pair of us?
    
    'Harry is the best hope we have.
    Trust him.'
    
    What gave you away?
    
    Hedwig, I think.
    She was trying to protect me.
    
    Thanks.
    
    Deserves that. Brilliant, he was.
    
    - I wouldn't be standing here without him.
    - Really?
    
    Always the tone of surprise.
    
    We the last back?
    
    Where's George?
    
    How you feeling, Georgie?
    
    Saint-like.
    
    Come again?
    
    Saint-like. I'm holy.
    
    I'm holey, Fred. Get it?
    
    The whole wide world of ear-related humor
    and you go for 'I'm holey.'
    
    That's pathetic.
    
    Reckon I'm still better-looking than you.
    
    Mad-Eye's dead.
    
    Mundungus took one look at Voldemort
    and Disapparated.
    
    Head for the Burrows.
    
    This is beyond anything I imagined.
    
    - Seven?
    - Seven...? A Horcrux.
    
    They could be hidden anywhere.
    
    To rip the soul into seven pieces....
    
    - If you did destroy each Horcrux....
    - One destroys Voldemort.
    
    Trust me.
    
    You lied to me. Lied to me, Ollivander.
    
    Going somewhere?
    
    Nobody else is going to die. Not for me.
    
    For you?
    
    You think Mad-Eye died for you?
    
    You think George took that curse
    for you?
    
    You may be the Chosen One, mate,
    but this is a whole lot bigger than that.
    
    It's always been bigger than that.
    
    - Come with me.
    - What, and leave Hermione?
    
    You mad?
    We wouldn't last two days without her.
    
    Don't tell her I said that.
    
    Besides,
    you've still got the Trace on you.
    
    - We've still got the wedding--
    - I don't care about a wedding.
    
    I'm sorry. No matter whose it is.
    I have to start finding these Horcruxes.
    
    They're our only chance to beat him...
    
    ...and the longer we stay here,
    the stronger he gets.
    
    Tonight's not the night, mate.
    
    We'd only be doing him a favor.
    
    Do you think he knows?
    
    I mean, they're bits of his soul,
    these Horcruxes. Bits of him.
    
    When Dumbledore destroyed the ring,
    you destroyed Tom Riddle's diary...
    
    ...he must have felt something.
    
    To kill the other Horcruxes,
    we have to find them.
    
    Where are they?
    
    Where do we start?
    
    Ready when you are.
    
    Please pay attention!
    It's your brother's wedding. Buck up.
    
    Zip me up, will you?
    
    It seems silly, doesn't it, a wedding?
    
    Given everything that's going on.
    
    Maybe that's the best reason to have it...
    
    ...because of everything that's going on.
    
    Morning.
    
    Come on, keep up.
    
    All together now.
    
    One, two, three.
    
    How's it looking at your end, boys?
    
    Brilliant.
    
    Bloody hell.
    What's the Minister of Magic doing here?
    
    To what do we owe the pleasure,
    Minister?
    
    I think we both know the answer
    to that question, Mr. Potter.
    
    And this is...?
    
    'Herein is set forth
    the last will and testament...
    
    ...of Albus Percival Wulfric
    Brian Dumbledore.
    
    First, to Ronald Bilius Weasley...
    
    ...I leave my Deluminator...
    
    ...a device of my own making...
    
    ...in the hope that,
    when things seem most dark...
    
    ...it will show him the light.'
    
    - Dumbledore left this for me?
    - Yeah.
    
    Brilliant.
    
    What is it?
    
    Wicked.
    
    'To Hermione Jean Granger...
    
    ...I leave my copy of
    The Tales of Beedle the Bard...
    
    ...in the hope that she find it
    entertaining and instructive.'
    
    Mom used to read me those.
    
    'The Wizard and the Hopping Pot.'
    
    'Babbitty Rabbitty
    and the Cackling Stump.'
    
    Come on, Babbitty Rabbitty.
    
    No?
    
    'To Harry James Potter...
    
    ...I leave the Snitch he caught
    in his first Quidditch match at Hogwarts...
    
    ...as a reminder
    of the rewards of perseverance...
    
    ...and skill.'
    
    - Is that it, then?
    - Not quite.
    
    Dumbledore left you a second bequest:
    
    The sword of Godric Gryffindor.
    
    Unfortunately, the sword of Gryffindor
    was not Dumbledore's to give away.
    
    As an important historical artifact,
    it belongs--
    
    To Harry.
    
    It belongs to Harry.
    
    It came to him when he needed it
    in the Chamber of Secrets.
    
    The sword may present itself
    to any worthy Gryffindor.
    
    That does not make it
    that wizard's property.
    
    And, in any event, the current
    whereabouts of the sword are unknown.
    
    - Excuse me?
    - The sword is missing.
    
    I don't know what you're up to,
    Mr. Potter...
    
    ...but you can't fight this war
    on your own.
    
    He's too strong.
    
    Hello, Harry.
    
    I've interrupted a deep thought, haven't I?
    I can see it growing smaller in your eyes.
    
    Of course not. How are you, Luna?
    
    Very well. Got bitten by a garden gnome
    only moments ago.
    
    Gnome saliva is very beneficial.
    
    Xenophilius Lovegood.
    We live just over the hill.
    
    Pleasure to meet you, sir.
    
    I trust you know, Mr. Potter,
    that we at The Quibbler...
    
    ...unlike those toadies
    at The Daily Prophet...
    
    ...fully supported Dumbledore
    in his lifetime...
    
    ...and, in his death,
    support you just as fully.
    
    Thank you.
    
    Come, Daddy.
    Harry doesn't want to talk to us right now.
    
    He's just too polite to say so.
    
    Harry Potter.
    
    Excuse me, sir? May I sit down?
    
    Mr. Potter. By all means. Here.
    
    Thanks.
    
    I found what you wrote
    in The Daily Prophet really moving.
    
    You obviously knew Dumbledore well.
    
    Well, I certainly knew him the longest.
    
    That is, if you don't count his brother,
    Aberforth...
    
    ...and somehow, people never do
    seem to count Aberforth.
    
    - I didn't even know he had a brother.
    - Ah.
    
    Well, Dumbledore was always
    very private, even as a boy.
    
    Don't despair, Elphias.
    
    I'm told he's been thoroughly
    unriddled by Rita Skeeter...
    
    ...in 800 pages, no less.
    
    Word has it that someone talked to her.
    
    Someone who knew
    the Dumbledore family well.
    
    Both you and I know who that is,
    Elphias.
    
    A monstrous betrayal.
    
    Who are we talking about?
    
    Bathilda Bagshot.
    
    - Who?
    - My God, boy...
    
    ...she's only the most celebrated
    magical historian of the last century.
    
    She was as close
    to the Dumbledores as anyone.
    
    Oh, I'm sure Rita Skeeter thought
    it well worth a trip to Godric's Hollow...
    
    ...to take a peek
    into that old bird's rattled cage.
    
    Godric's Hollow?
    
    Bathilda Bagshot
    lives at Godric's Hollow?
    
    Well, that's where
    she first met Dumbledore.
    
    You don't mean to say
    he lived there too?
    
    The family moved there
    after his father killed those three Muggles.
    
    Oh, it was quite the scandal.
    
    Honestly, my boy,
    are you sure you knew him at all?
    
    The Ministry has fallen.
    
    The Minister of Magic is dead.
    
    They are coming.
    
    They are coming.
    
    They are coming.
    
    They're coming!
    
    Nice meeting you, Mr. Potter.
    
    - Ginny!
    - Harry! Go!
    
    Go!
    
    Here you go, sightseeing tour?
    Leaves in 15 minutes.
    
    - Where are we?
    - Shaftesbury Avenue.
    
    I used to come to the theater here
    with Mom and Dad.
    
    I don't know why I thought of it.
    It just popped into my head.
    
    This way.
    
    We need to change.
    
    How the ruddy...?
    
    Undetectable Extension Charm.
    
    You're amazing, you are.
    
    Always the tone of surprise.
    
    Ah. That'll be the books.
    
    What about all the people
    at the wedding?
    
    - Do you think we should go back?
    - They were after you.
    
    We'd put everyone in danger
    by going back.
    
    - Ron's right.
    - Ahem.
    
    Coffee?
    
    - A cappuccino, please.
    - You?
    
    - What she said.
    - Same.
    
    So where do we go from here?
    Leaky Cauldron?
    
    It's too dangerous.
    
    If Voldemort has taken over the Ministry,
    none of the old places are safe.
    
    Everyone from the wedding
    will have gone underground, into hiding.
    
    My rucksack with all my things,
    I've left it at the Burrow.
    
    You're joking.
    
    I've had all the essentials packed
    for days, just in case.
    
    By the way, these jeans, not my favorite.
    
    Down!
    
    Stupefy!
    
    Expulso!
    
    Petrificus Totalus.
    
    Go.
    
    Leave.
    
    Lock the door, get the lights.
    
    This one's name is Rowle.
    
    He was on the Astronomy Tower
    the night Snape killed Dumbledore.
    
    This is Dolohov. I recognize him
    from the wanted posters.
    
    So, what we gonna do with you, hey?
    
    Kill us if it was turned round,
    wouldn't you?
    
    If we kill them, they'll know we were here.
    
    Ron.
    
    Suppose he did Mad-Eye.
    How would you feel then?
    
    It's better we wipe their memories.
    
    You're the boss.
    
    Hermione...
    
    ...you're the best at spells.
    
    Obliviate.
    
    How is it they knew we were there?
    
    Maybe you still have the Trace on you?
    
    Can't be. Trace breaks at 17.
    It's wizarding law.
    
    What?
    
    We didn't celebrate your birthday, Harry.
    
    Ginny and I, we prepared a cake.
    
    We were going to bring it out
    at the end of the wedding.
    
    I appreciate the thought, but given the fact
    that we were almost killed...
    
    ...by a couple of Death Eaters
    a few minutes ago....
    
    Right.
    
    Perspective.
    
    We need to get off the streets,
    get somewhere safe.
    
    What was that all about?
    
    Probably Mad-Eye's idea,
    in case Snape decided to come snooping.
    
    Homenum Revelio.
    
    We're alone.
    
    I believed another wand--
    
    - You lied to me.
    - It makes no sense.
    
    I believed a different wand would work,
    I swear.
    
    There must be another way.
    
    Harry? Hermione, where are you?
    
    I think I've found something.
    
    Lovely.
    
    'Regulus Arcturus Black.'
    
    R.A.B.
    
    'I know I will be dead
    long before you read this.
    
    I have stolen the real Horcrux
    and intend to destroy it.'
    
    R.A.B. is Sirius's brother.
    
    Yes.
    
    Question is,
    did he actually destroy the real Horcrux?
    
    You've been spying on us, have you?
    
    Kreacher has been watching.
    
    Maybe he knows where the real locket is.
    
    Have you ever seen this before?
    
    Kreacher?
    
    It's Master Regulus' locket.
    
    But there were two, weren't there?
    
    Where's the other one?
    
    Kreacher doesn't know
    where the other locket is.
    
    Yes, but did you ever see it?
    Was it in this house?
    
    Filthy Mudblood.
    
    - Death Eaters are coming--
    - Ron.
    
    - Blood traitor, Weasley.
    - Answer her.
    
    Yes.
    
    It was here in this house.
    
    A most evil object.
    
    How do you mean?
    
    Before Master Regulus died,
    he ordered Kreacher to destroy it...
    
    ...but no matter how hard Kreacher tried,
    he could not do it.
    
    Well, where is it now?
    
    - Did someone take it?
    - He came in the night.
    
    He took many things,
    including the locket.
    
    Who did?
    
    Who was it, Kreacher?
    
    Mundungus.
    
    Mundungus Fletcher.
    
    Find him.
    
    My father will hear about this.
    
    Hey, losers.
    
    He isn't here.
    
    As your new Minister for Magic...
    
    ...I promise to restore
    this temple of tolerance...
    
    ...to its former glory.
    
    Therefore, beginning today...
    
    ...each employee
    will submit themselves...
    
    ...for evaluation.
    
    You have nothing to fear...
    
    ...if you have nothing to hide.
    
    - How much?
    - Two Galleons.
    
    Come on, time is money. Cheers, pal.
    
    - Snatchers!
    - Move out of the way.
    
    - I told you.
    - Get out.
    
    Squash him.
    
    Be a bit gentler.
    
    They have flesh memories.
    
    When Scrimgeour first gave it to you,
    I thought it might open at your touch.
    
    That Dumbledore had hidden
    something inside it.
    
    Many of you are wondering...
    
    ...why Voldemort has yet to show himself
    now that he has vanquished...
    
    ...the most powerful symbol of opposition
    to him and his followers.
    
    Get off.
    
    Harry Potter, so long it's been.
    
    Get off me.
    
    As requested,
    Kreacher has returned with the thief...
    
    - Expelliarmus.
    - ...Mundungus Fletcher.
    
    What you playing at? Setting a pair
    of bleeding house-elves after me.
    
    Dobby was only trying to help.
    
    Dobby saw Kreacher in Diagon Alley,
    which Dobby thought was curious.
    
    And then Dobby heard Kreacher
    mention Harry Potter's name.
    
    - I just--
    - And then Dobby saw Kreacher...
    
    - ...talking with the thief, Mundungus--
    - I'm no thief.
    
    You foul little-- Git.
    
    I'm a purveyor
    of rare and wondrous objects.
    
    You're a thief, Dung. Everyone knows it.
    
    Master Weasley,
    so good to see you again.
    
    Wicked trainers.
    
    Listen, I panicked that night, all right?
    
    Could I help it
    if Mad-Eye fell off his broom?
    
    - You....
    - Tell the truth.
    
    When you turned this place over--
    Don't deny it.
    
    --you found a locket, am I right?
    
    Why? Was it valuable?
    
    You still got it?
    
    No, he's worried
    he didn't get enough money for it.
    
    Bleeding give it away, didn't I?
    
    There I was,
    flogging me wares in Diagon Alley...
    
    ...when some Ministry hag comes up
    and asks to see me license.
    
    Says she's a mind to lock me up.
    
    And would've done it too,
    if she hadn't taken a fancy to that locket.
    
    - Who was she? The witch. Do you know?
    - No, I--
    
    Well, she's there. Look.
    
    Bleeding bow and all.
    
    Right, remember what we said.
    
    Don't speak to anyone
    unless absolutely necessary.
    
    Just try and act normal.
    Do what everybody else is doing.
    
    If we do that, then with a bit of luck,
    we'll get inside.
    
    - And then--
    - It gets really tricky.
    
    - Correct.
    - Yeah.
    
    - This is completely mental.
    - Completely.
    
    The world's mental.
    
    Come on...
    
    ...we've got a Horcrux to find.
    
    We flush ourselves in.
    
    That's bloody disgusting.
    
    Name?
    
    You. Come.
    
    - What? What?
    - Come on.
    
    - What did I do?
    - Just keep walking.
    
    - Are those--?
    - Muggles.
    
    In their rightful place.
    
    Gotta tell you,
    I'm starting to freak out a bit.
    
    How long did you say this batch
    of Polyjuice would last, Hermione?
    
    I didn't.
    
    Cattermole.
    
    It's still raining inside my office.
    That's two days now.
    
    Have you tried an umbrella?
    
    You do realize I'm going downstairs,
    don't you, Cattermole?
    
    - Downstairs?
    - To interrogate your wife.
    
    Now, if my wife's blood status
    were in doubt...
    
    ...and the head of the Department
    of Magical Law Enforcement...
    
    ...needed a job doing,
    I think I might just make that a priority.
    
    You have one hour.
    
    Oh, my God. What am I gonna do?
    My wife's all alone downstairs.
    
    - Ron, you don't have a wife.
    - Oh, right.
    
    Level 2.
    
    But how do I stop it raining?
    
    Try 'Finite Incantatem.'
    
    Department of Magical Law Enforcement...
    
    ...and Improper Use of Magic Department.
    
    This is you, Ron.
    
    Finite Incantatem. Okay.
    And if that doesn't work...?
    
    Level 1,
    Minister of Magic and support staff.
    
    If we don't locate Umbridge
    within the hour...
    
    ...we go find Ron
    and come back another day.
    
    - Deal?
    - Yes.
    
    Ah, Mafalda. Travers sent you, did he?
    
    Good, we'll go straight down.
    
    Albert, aren't you getting out?
    
    Runcorn.
    
    Accio locket.
    
    All right, all right.
    Let's calm down, shall we?
    
    Let's get back to work, please.
    
    Calm down.
    
    Runcorn.
    
    Morning.
    
    Ron, it's me.
    
    Harry.
    Blimey, forgot what you looked like.
    
    Where's Hermione?
    
    She's gone down to the courtrooms,
    with Umbridge.
    
    Bloody cold down here.
    
    I'm a half-blood. My father was a wizard.
    
    William Alderton.
    He worked here for 30 years.
    
    Perhaps you know him.
    Always wore his jacket inside out.
    
    No, there's been a mistake.
    I'm half-blood, you see.
    
    We must go back. I'm half-blood.
    
    - Mary Elizabeth Cattermole?
    - Yes.
    
    Of 27 Chislehurst Gardens,
    Great Tolling, Evesham?
    
    - Yes.
    - It's here.
    
    Mother to Maisie, Ellie and Alfred?
    Wife to Reginald?
    
    Reg?
    
    Thank you, Albert.
    
    Mary Elizabeth Cattermole?
    
    Yes.
    
    A wand was taken from you
    upon your arrival at the Ministry today.
    
    Is this that wand?
    
    Would you please tell the court from
    which witch or wizard you took this wand?
    
    I didn't take it.
    
    I got it in Diagon Alley, at Ollivander's,
    when I was 11.
    
    It chose me.
    
    You're lying.
    
    Wands only choose witches,
    and you are not a witch.
    
    But I am.
    
    Tell them, Reg. Tell them what I am.
    
    Reg, tell them what I am.
    
    What on earth are you doing, Albert?
    
    You're lying, Dolores.
    
    And one mustn't tell lies.
    
    Stupefy!
    
    It's Harry Potter.
    
    It is, isn't it?
    This'll be one to tell the kids.
    
    Expecto Patronum!
    
    Oh. Oh. Oh.
    
    Mary, go home.
    
    Get the kids.
    
    I'll meet you there. We have to get out
    of the country, understand?
    
    Mary, do as I say.
    
    Mary?
    
    Who's that?
    
    Long story. Nice meeting you.
    
    It's Harry Potter.
    
    It's Harry. Harry Potter.
    
    - There he is.
    - Get him!
    
    - Get him!
    - Stop him!
    
    - Watch out.
    - Look out.
    
    This way!
    
    Expelliarmus!
    
    Oh, my God.
    
    Shh, shh, shh. It's all right. It's okay.
    
    Harry. Harry, quickly, in my bag.
    
    There's a bottle labeled
    'Essence of Dittany.'
    
    Shh. Shh.
    
    Okay, okay. Quickly.
    
    - Accio Dittany.
    - Shh.
    
    It's all right. Unstopper it.
    
    Hermione, his arm.
    
    I know, just do it.
    
    It's okay.
    
    - Okay, it's gonna sting a little bit.
    - What happened? I thought we meant...
    
    - ...to be going back to Grimmauld Place.
    - We were. We were. Shh.
    
    It's all right. One more, one more.
    
    We were there, we were there,
    but Yaxley had hold of me, and I....
    
    I knew once he'd seen where we were,
    we couldn't stay...
    
    ...so I brought us here...
    
    ...but Ron got splinched.
    
    It's all right.
    
    Protego Totalum.
    
    Salvio Hexia.
    
    What are you doing?
    
    Protective enchantments.
    
    I don't fancy another visit like the one
    we had in Shaftesbury Avenue, do you?
    
    You can get going on the tent.
    
    - Tent?
    - Protego Totalum.
    
    Where am I supposed to find a tent?
    
    Repello Muggletum. Muffliato.
    
    You first.
    
    Dissendium.
    
    Incendio.
    
    Expulso.
    
    Diffindo.
    
    Reducto.
    
    What are you doing?
    
    We have to keep it safe
    until we find out how to destroy it.
    
    Seems strange, mate.
    Dumbledore sends you off...
    
    ...to find all these Horcruxes,
    but doesn't tell you how to destroy them.
    
    Doesn't that bother you?
    
    A goblin by the name of Gornuk was killed.
    
    It is believed that Muggle-born
    Dean Thomas and a second goblin...
    
    ...both believed to have been traveling
    with Tonks, Cresswell...
    
    ...and Gornuk, may have escaped.
    
    If Dean is listening or anyone has
    any knowledge of his whereabouts...
    
    ...his parents and sisters
    are desperate for news.
    
    Meanwhile, a Muggle family of five
    has been found dead in their home.
    
    You know the spell, Harry.
    
    Tell me.
    
    Tell me, Gregorovitch.
    
    It was stolen from me.
    
    Who was he? The thief?
    
    It was a boy. It was he who took it.
    
    I never saw it again.
    
    I swear on my life.
    
    I believe you.
    
    Avada Kedavra!
    
    I thought it had stopped.
    
    You can't keep letting him in, Harry.
    
    You-Know-Who has found Gregorovitch.
    
    The wandmaker?
    
    He wants something
    that Gregorovitch used to have...
    
    ...but I don't know what.
    
    But he wants it desperately.
    I mean, it's as if his life depends on it.
    
    Don't.
    
    - It comforts him.
    - It sets my teeth on edge.
    
    What's he expecting to hear,
    good news?
    
    --who long expected it,
    the fall of the Ministry was shocking.
    
    I think he just hopes
    he doesn't hear bad news.
    
    We promise
    to remain your eyes and ears--
    
    How long before he can travel?
    
    --bringing you news when we can,
    from wherever we can.
    
    I'm doing everything I can.
    
    You're not doing enough!
    
    Take it off.
    
    I said, take it off now.
    
    - Better?
    - Loads.
    
    We'll take it in turns, okay?
    
    Finch does admit
    his invention currently has one short.
    
    And now, other news:
    
    Severus Snape, newly-appointed
    headmaster of Hogwarts...
    
    ...has decreed that all students
    must conform to the latest house rules.
    
    Hogwarts bears little resemblance to the
    school under Dumbledore's leadership.
    
    Snape's curriculum is severe,
    reflecting the wishes of the Dark Lord...
    
    ...and infractions are dealt with harshly
    by the two Death Eaters on staff.
    
    What's that?
    
    What's that smell?
    
    - What you doing?
    - It's heavy.
    
    Oh, sorry. Do you want me to carry it?
    
    - Yeah, thank you.
    - Don't be ridiculous. Pick it up.
    
    Numpty.
    
    Snatchers.
    
    Good to know your enchantments work.
    
    He could smell it. My perfume.
    
    I've told you...
    
    ...Ron isn't strong enough to Apparate.
    
    Well, then, we'll go on foot.
    
    And next time, Hermione, as much as
    I like your perfume, just don't wear any.
    
    And now for the names
    of missing witches and wizards.
    
    These are confirmed.
    
    Thankfully, the list is short today.
    
    Jason and Alison Denbright.
    
    Oh. Thank you.
    
    Bella, Jake, Charlie, and Madge Farley.
    
    Joe Laurie.
    
    Eleanor Sarah Gibbs.
    
    Harry and Bronwyn Trigg.
    
    Rob and Ellie Dowson.
    
    Georgia Clark-Day.
    
    Joshua Flexson.
    
    George Coutas.
    
    Gabriella and Emily Mather.
    
    Jacob and Mimi Erland.
    
    William and Brian Gallagher.
    
    He doesn't know
    what he's doing, does he?
    
    None of us do.
    
    Toby and Olivia Gleaves.
    
    Katie and James Killick.
    
    Elsie Valentine Schroeder.
    
    Jennifer Winston.
    
    Tamsin and lola Hillicker.
    
    Scarlet and Kitty Sharp.
    
    Oh, my God.
    
    What?
    
    I'll tell you in a minute.
    
    Maybe you could tell me now.
    
    The sword of Gryffindor,
    it's goblin-made.
    
    Brilliant.
    
    No, you don't understand.
    
    Dirt and rust have no effect
    on the blade.
    
    It only takes in
    that which makes it stronger.
    
    Okay.
    
    Harry, you've already destroyed
    one Horcrux, right?
    
    Tom Riddle's diary
    in the Chamber of Secrets.
    
    With a Basilisk fang.
    If you tell me you've got one of those...
    
    - ...in that bloody beaded bag of yours....
    - Don't you see?
    
    In the Chamber of Secrets, you stabbed
    the Basilisk with the sword of Gryffindor.
    
    Its blade is impregnated
    with Basilisk venom.
    
    It only takes in
    that which makes it stronger.
    
    - Exactly, which is why--
    - It can destroy Horcruxes.
    
    That's why Dumbledore left it to you
    in his will.
    
    You are brilliant, Hermione. Truly.
    
    Actually, I'm highly logical, which
    allows me to look past extraneous detail...
    
    ...and perceive clearly
    that which others overlook.
    
    Yeah, there's only one problem,
    of course.
    
    The sword was stolen.
    
    Yeah, I'm still here.
    
    But you two carry on.
    Don't let me spoil the fun.
    
    - What's wrong?
    - Wrong? Nothing's wrong.
    
    Not according to you, anyway.
    
    Look, if you've got something to say,
    don't be shy. Spit it out.
    
    All right, I'll spit it out.
    But don't expect me to be grateful...
    
    ...because there's another damn thing
    we've gotta find.
    
    I thought you knew
    what you signed up for.
    
    Yeah. I thought I did too.
    
    Well then, I'm sorry,
    but I don't quite understand.
    
    What part of this isn't living up
    to your expectations?
    
    Did you think we were gonna
    be staying in a hotel?
    
    Finding a Horcrux every other day?
    Thought you'd be back by Christmas?
    
    I just thought, after all this time...
    
    ...we would've achieved something.
    I thought you knew what you were doing.
    
    I thought Dumbledore told you
    something worthwhile.
    
    - I thought you had a plan.
    - I told you everything Dumbledore told me.
    
    In case you haven't noticed,
    we found a Horcrux.
    
    Yeah, and we're as close to getting rid of it
    as we are to finding the rest of them.
    
    Ron. Please, take--
    
    Take the Horcrux off.
    You wouldn't be saying this...
    
    ...if you hadn't been wearing it all day.
    
    Want to know why I listen to that radio?
    
    To make sure I don't hear Ginny's name,
    or Fred, or George or Mom.
    
    You think I'm not listening?
    You think I don't know how this feels?!
    
    No, you don't know how it feels!
    
    Your parents are dead.
    You have no family.
    
    - Stop. Stop.
    - Fine, then go!
    
    Go, then!
    
    Fine.
    
    Ron.
    
    And you?
    
    Are you coming or you staying?
    
    Fine. I get it.
    
    I saw you two the other night.
    
    Ron, that's-- That's nothing.
    
    Ron--
    
    Ron, where are you going?
    
    Please, come back.
    
    Ron.
    
    Ron!
    
    Salvio Hexia.
    
    Repellum Muggletum.
    
    Salvio Hexia.
    
    Poor old Jim's white as a ghost
    
    He's found the answer that we lost
    
    We're all weeping now
    Weeping because
    
    There ain't nothing we can do
    To protect you
    
    O children
    
    Lift up your voice
    
    Lift up your voice
    
    Children
    
    Rejoice, rejoice
    
    Hey, little train, we're jumping on
    
    The train that goes to the kingdom
    
    We're happy, Ma
    We're having fun
    
    And the train ain't even left the station
    
    Hey, little train, wait for me
    
    I once was blind but now I see
    
    Have you left a seat for me?
    
    Is that such a stretch of the imagination?
    
    Hey, little train, wait for me
    
    I was held in chains but now I'm free
    
    I'm hanging in there
    Don't you see?
    
    In this process of elimination
    
    Hey, little train, we're jumping on
    
    The train that goes to the kingdom
    
    We're happy, Ma
    We're having fun
    
    It's beyond my wildest expectation
    
    Hey, little train, we're jumping on
    
    The train that goes to the kingdom
    
    We're happy, Ma
    We're having fun
    
    The train ain't even left the station
    
    Hermione.
    
    Hermione? You were right.
    
    Snitches have flesh memories...
    
    ...but I didn't catch the first Snitch
    with my hand, I almost swallowed it.
    
    - 'I open at the close.'
    - What do you think that means?
    
    I don't know.
    
    I found something as well.
    
    At first I thought it was an eye,
    but now I don't think it is.
    
    It isn't a rune, and it isn't anywhere
    in Spellman's Syllabary.
    
    Somebody inked it in.
    It isn't part of the book. Somebody drew it.
    
    Luna's dad was wearing that
    at Bill and Fleur's wedding.
    
    Why would someone draw it
    in a children's book?
    
    Look, Hermione, I've been thinking.
    
    I want to go to Godric's Hollow.
    
    It's where I was born.
    It's where my parents died.
    
    That's exactly where he'll expect you to go
    because it means something to you.
    
    Yeah, but it means something to him too,
    Hermione.
    
    You-Know-Who almost died there.
    
    I mean, isn't that exactly the type of place
    he'd be likely to hide a Horcrux?
    
    It's dangerous, Harry.
    
    But even I have to admit, recently
    I've been thinking we'll have to go there.
    
    I think it's possible
    something else is hidden there.
    
    What?
    
    The sword.
    
    If Dumbledore wanted you to find it,
    but didn't want it in the Ministry's hands...
    
    ...where better to hide it than
    the birthplace of the founder of Gryffindor?
    
    Hermione....
    
    Don't ever let me
    give you a haircut again.
    
    I still think we should've used
    Polyjuice Potion.
    
    No.
    
    This is where I was born.
    
    I'm not returning as someone else.
    
    Good night. Ha-ha-ha.
    
    Harry, I think it's Christmas Eve.
    
    Listen.
    
    Do you think they'd be in there,
    Hermione?
    
    My mom and dad.
    
    Yeah, I think they would.
    
    'Ignotus Peverell.'
    
    Hey, Harry?
    
    Merry Christmas, Hermione.
    
    Merry Christmas, Harry.
    
    Harry, there's someone
    watching us. By the church.
    
    I think I know who that is.
    
    I don't like this, Harry.
    
    Hermione, she knew
    Dumbledore. She might have the sword.
    
    This is where they died, Hermione.
    
    This is where he murdered them.
    
    You're Bathilda, aren't you?
    
    Here, let me do that.
    
    Miss Bagshot, who is this man?
    
    Harry.
    
    Lumos.
    
    Harry!
    
    Confringo!
    
    Are you feeling better?
    
    You've outdone yourself this time,
    Hermione.
    
    The Forest of Dean.
    
    I came here once with Mom and Dad,
    years ago.
    
    It's just how I remember it.
    
    The trees, the river, everything.
    
    Like nothing's changed.
    
    Not true, of course.
    Everything's changed.
    
    If I brought my parents back here now,
    they probably wouldn't recognize any of it.
    
    Not the trees, not the river...
    
    ...not even me.
    
    Maybe we should just stay here, Harry.
    
    Grow old.
    
    You wanted to know
    who the boy in the photograph was.
    
    I know.
    
    Gellert Grindelwald.
    
    He's the thief I saw
    in Gregorovitch's Wand Shop.
    
    Speaking of which, where is my wand?
    
    Where's my wand, Hermione?
    
    As we were leaving Godric's Hollow,
    I cast a curse and it rebounded.
    
    I'm sorry.
    
    - I tried to mend it, but wands are different.
    - It's done.
    
    Leave me yours.
    Go inside and get warm.
    
    I'll take the locket as well.
    
    Trust me.
    
    Lumos.
    
    Accio sword.
    
    Diffindo.
    
    - Hermione?
    - Are you mental?
    
    It was you?
    
    Well, yeah. Bit obvious, I think.
    
    And you cast the doe as well, did you?
    
    - No, I thought that was you.
    - No, my Patronus is a stag.
    
    Right. Yeah. Antlers.
    
    Okay, Ron. Do it.
    
    I can't handle it. That thing affects me
    more than it affects you and Hermione.
    
    - All the more reason.
    - No. I can't.
    
    Then why are you here?
    
    Why did you come back?
    
    Now, I'll have to speak to it in order for it
    to open. When it does, don't hesitate.
    
    I don't know what's in there,
    but it'll put up a fight.
    
    The bit of Riddle that was in that diary
    tried to kill me.
    
    All right.
    
    One...
    
    ...two...
    
    ...three.
    
    I have seen your heart, and it is mine.
    
    I have seen your dreams,
    Ronald Weasley...
    
    ...and I have seen your fears.
    
    Least loved by your mother,
    who craved a daughter.
    
    Least loved by the girl
    who prefers your friend.
    
    Ron, kill it!
    
    We were better without you.
    
    Happier without you.
    
    Who could look at you
    compared to Harry Potter?
    
    What are you
    compared with the Chosen One?
    
    Ron, it's lying!
    
    Your mother confessed
    she would have preferred me as a son.
    
    What woman would take you?
    
    You are nothing.
    
    Nothing.
    
    Nothing compared to him.
    
    Just think...
    
    ...only three to go.
    
    Hermione?
    
    Hermione?
    
    Is everything all right?
    
    It's fine.
    Actually, you know, it's more than fine.
    
    Hey.
    
    You complete ass, Ronald Weasley!
    
    You show up here after weeks,
    and you say 'hey'?
    
    - Where's my wand? Where's my wand?
    - I don't know.
    
    - Harry Potter, give me my wand.
    - I don't have it.
    
    - How come he's got your wand?
    - Never mind why he's got my wand.
    
    What is that?
    
    You destroyed it.
    
    And how is it that you just happen
    to have the sword of Gryffindor?
    
    It's a long story.
    
    - Don't think this changes anything.
    - Oh, of course not.
    
    I only just destroyed a bloody Horcrux.
    Why would that change anything?
    
    Look, I wanted to come back
    as soon as I left.
    
    - I just didn't know how to find you.
    - Yeah, how did you find us?
    
    With this. It doesn't just turn off lights.
    
    I don't know how it works, but Christmas
    morning I was sleeping in this little pub...
    
    ...keeping away from some Snatchers...
    
    ...and I heard it.
    
    It?
    
    A voice...
    
    ...your voice, Hermione...
    
    ...coming out of it.
    
    - And what exactly did I say, may I ask?
    - My name.
    
    Just my name.
    
    Like a whisper.
    
    So I took it, clicked it,
    and this tiny ball of light appeared.
    
    And I knew.
    
    And sure enough, it floated toward me,
    the ball of light...
    
    ...went right to my chest,
    straight through me. Right here.
    
    And I knew it was gonna take me
    where I needed to go, so I Disapparated...
    
    ...and came to this hillside.
    
    It was dark. I had no idea where I was.
    
    I just hoped
    that one of you would show yourself.
    
    And you did.
    
    I've always liked these flames
    Hermione makes.
    
    How long do you reckon
    she'll stay mad at me?
    
    Well, just keep talking about that
    little ball of light touching your heart...
    
    ...and she'll come round.
    
    It was true. Every word.
    
    This is gonna sound crazy...
    
    ...but I think that's why Dumbledore
    left it to me, the Deluminator.
    
    I think he knew that somehow I'd need it
    to find my way back, and she'd lead me.
    
    Bloody hell, I just realized,
    you need a wand, don't you?
    
    - Yeah.
    - I've got one here.
    
    It's a blackthorn. Ten inches.
    
    Nothing special, but I reckon it'll do.
    
    Took if off a Snatcher
    a couple of weeks ago.
    
    Don't tell Hermione this,
    but they're a bit dim, Snatchers.
    
    This one was definitely part troll,
    the smell of him.
    
    Engorgio.
    
    - Reducio!
    - What's going on in there?
    
    - Nothing.
    - Nothing.
    
    We need to talk.
    
    Yeah, all right.
    
    - I want to go see Xenophilius Lovegood.
    - Sorry?
    
    See this?
    
    It's a letter Dumbledore wrote
    to Grindelwald. Look at the signature.
    
    It's the mark again.
    
    It keeps cropping up.
    
    In Beedle the Bard,
    in the graveyard in Godric's Hollow.
    
    It was there too.
    
    - Where?
    - Outside Gregorovitch's Wand Shop.
    
    But what does it mean?
    
    Look, you've got no idea where
    the next Horcrux is, and neither do I...
    
    ...but this, this means something.
    
    - I'm sure of it.
    - Yeah. Hermione's right.
    
    We ought to see Lovegood.
    
    Let's vote on it. Those in favor?
    
    You're not still mad at him, are you?
    
    I'm always mad at him.
    
    Luna.
    
    Luna.
    
    'Keep off the dirigible plums.'
    
    What is it? Who are you?
    
    What do you want?
    
    Hello, Mr. Lovegood. I'm Harry Potter.
    We met a few months ago.
    
    Could we come in?
    
    - Where is Luna?
    - Luna?
    
    She'll be along.
    
    So how can I help you, Mr. Potter?
    
    Well, actually....
    
    It was about something you were wearing
    round your neck at the wedding. A symbol.
    
    You mean this?
    
    Yes.
    
    That exactly.
    
    What we've wondered is, what is it?
    
    What is it?
    
    Well, it's the sign of the Deathly Hallows,
    of course.
    
    - The what?
    - The what?
    
    The Deathly Hallows.
    
    I assume you're all familiar with
    'The Tale of the Three Brothers.'
    
    - Yes.
    - No.
    
    I have it in here.
    
    'There were once three brothers...
    
    ...who were traveling along a lonely,
    winding road at twilight.'
    
    Midnight. Mom always said 'midnight.'
    
    But 'twilight's' fine. Better, actually.
    
    Do you want to read it?
    
    No. It's fine.
    
    'There were once three brothers...
    
    ...who were traveling along a lonely,
    winding road at twilight.
    
    In time, the brothers reached a river
    too treacherous to pass.
    
    But being learned in the magical arts...
    
    ...the three brothers simply
    waved their wands and made a bridge.
    
    Before they could cross, however...
    
    ...they found their path blocked
    by a hooded figure.
    
    It was Death, and he felt cheated.
    
    Cheated because travelers would
    normally drown in the river.
    
    But Death was cunning.
    
    He pretended to congratulate
    the three brothers on their magic...
    
    ...and said that each had earned a prize for
    having been clever enough to evade him.
    
    The oldest asked for a wand
    more powerful than any in existence.
    
    So Death fashioned him one
    from an elder tree that stood nearby.
    
    The second brother decided he wanted
    to humiliate Death even further...
    
    ...and asked for the power
    to recall loved ones from the grave.
    
    So Death plucked a stone from the river
    and offered it to him.
    
    Finally,
    Death turned to the third brother.
    
    A humble man...
    
    ...he asked for something that would
    allow him to go forth from that place...
    
    ...without being followed by Death.
    
    And so it was that Death reluctantly
    handed over his own Cloak of Invisibility.
    
    The first brother traveled
    to a distant village...
    
    ...where, with the Elder Wand in hand...
    
    ...he killed a wizard
    with whom he had once quarreled.
    
    Drunk with the power
    that the Elder Wand had given him...
    
    ...he bragged of his invincibility.
    
    But that night,
    another wizard stole the wand...
    
    ...and slit the brother's throat
    for good measure.
    
    And so Death took the first brother
    for his own.
    
    The second brother journeyed
    to his home...
    
    ...where he took the stone
    and turned it thrice in hand.
    
    To his delight, the girl he'd once hoped
    to marry before her untimely death...
    
    ...appeared before him.
    
    Yet, soon she turned sad and cold
    for she did not belong in the mortal world.
    
    Driven mad with hopeless longing...
    
    ...the second brother killed himself
    so as to join her.
    
    And so Death took the second brother.
    
    As for the third brother...
    
    ...Death searched for many years
    but was never able to find him.
    
    Only when he attained a great age
    did the youngest brother...
    
    ...shed the Cloak of Invisibility
    and give it to his son.
    
    He then greeted Death as an old friend
    and went with him gladly...
    
    ...departing this life as equals.'
    
    So there you are.
    Those are the Deathly Hallows.
    
    I'm sorry, sir.
    I still don't quite understand.
    
    Where's that pen I had?
    
    The Elder Wand.
    
    The most powerful wand ever made.
    
    The Resurrection Stone.
    
    The Cloak of Invisibility.
    
    Together, they make the Deathly Hallows.
    
    Together, they make one
    master of Death.
    
    That mark was on a grave
    in Godric's Hollow.
    
    Uh, Mr. Lovegood,
    does the Peverell Family...
    
    ...have anything to do
    with the Deathly Hallows?
    
    Uh-- Uh--
    
    Ignotus-- Excuse me. --and his brothers,
    Cadmus and Antioch...
    
    ...are thought to be the original owners
    of the Hallows...
    
    ...and therefore the inspiration
    for the story. Uh-- Uh--
    
    But your tea's gone cold.
    
    I'll be right back.
    
    Let's go down here.
    
    Let's get out of here.
    
    I'm not drinking any more of that stuff,
    hot or cold.
    
    Thank you, sir.
    
    - You forgot the water.
    - Water?
    
    For the tea.
    
    Did--? Did I?
    
    How silly of me.
    
    It's no matter.
    We really should be going anyway.
    
    No, you can't!
    
    Sir?
    
    You're my only hope.
    
    They were angry, you see,
    about what I'd been writing.
    
    So they took her.
    
    They took my Luna.
    
    My Luna.
    
    But it's really you they want.
    
    Who took her, sir?
    
    Voldemort.
    
    Stop! I've got him!
    
    That treacherous little bleeder.
    Is there no one we can trust?
    
    They kidnapped her
    because he supported me.
    
    He was just desperate.
    
    I'll do the enchantments.
    
    Hello, beautiful.
    
    Well, don't hang about, snatch them.
    
    Harry.
    
    Tell me, Grindelwald.
    Tell me where it is.
    
    Grindelwald. Grindelwald. Grindelwald.
    
    Hello, Tom.
    I knew you would come one day...
    
    ...but surely you must know
    I no longer have what you seek.
    
    - Tell me, Grindelwald. Tell me where it is.
    - Ha-ha-ha.
    
    Tell me who possesses it.
    
    The Elder Wand lies with him,
    of course...
    
    ...buried in the earth.
    
    Dumbledore.
    
    The Hallows exist...
    
    ...but he's only after one of them,
    the last one. He knows where it is.
    
    He's gonna have it by the end of the night.
    You-Know-Who's found the Elder Wand.
    
    - Don't touch her. Unh!
    - Leave him.
    
    Your boyfriend will get worse than that...
    
    Get off me.
    
    ...if he doesn't learn to behave himself.
    
    What happened to you, ugly?
    
    No, not you.
    
    - What's your name?
    - Dudley. Vernon Dudley.
    
    Check it.
    
    And you, my lovely...
    
    ...what do they call you?
    
    Penelope Clearwater, half-blood.
    
    There's no Vernon Dudley on here.
    
    Did you hear that, ugly?
    The list says you're lying.
    
    How come you don't want us
    to know who you are?
    
    The list's wrong. I told you who I am.
    
    Change of plan.
    
    We're not taking this lot to the Ministry.
    
    Get Draco.
    
    Well?
    
    - I can't be sure.
    - Draco. Look closely, son.
    
    If we are the ones
    to hand Potter over to the Dark Lord...
    
    ...everything would be forgiven.
    All would be as it was, you understand?
    
    Now, we won't be forgetting who
    actually caught him, I hope, Mr. Malfoy.
    
    You dare to
    talk to me like that in my own house?
    
    Lucius.
    
    Don't be shy, sweetie. Come over.
    
    Now, if this isn't who we think it is, Draco,
    and we call him, he'll kill us all.
    
    We need to be absolutely sure.
    
    What's wrong with his face?
    
    Yes, what is wrong with his face?
    
    He came to us like that.
    
    Something he picked up in the forest,
    I reckon.
    
    Or ran into a Stinging Jinx.
    Was it you, dearie?
    
    Give me her wand.
    We'll see what her last spell was.
    
    Ah. Got you.
    
    What is that?
    
    Where'd you get that from?
    
    It was in her bag when we searched her.
    Reckon it's mine now.
    
    Are you mad?
    
    Go! Get out!
    
    Cissy, put the boys in the cellar.
    
    I want to have a little conversation
    with this one, girl-to-girl.
    
    What are we gonna do?
    We can't leave Hermione alone with her.
    
    Ron?
    
    Harry?
    
    Luna?
    
    That sword is meant to be in my vault
    at Gringotts. How did you get it?
    
    What else did you and your friends take
    from my vault?!
    
    I didn't take anything. Please.
    I didn't take anything.
    
    I don't believe it.
    
    We have to do something.
    
    There's no way out of here.
    We've tried everything. It's enchanted.
    
    - Please! please!
    - Shut up!
    
    You're bleeding, Harry.
    
    That's a curious thing
    to keep in your sock.
    
    Help us.
    
    - Let her go.
    - Shut up. Get back.
    
    You, goblin, come with me.
    
    - Aah!
    - Dobby?
    
    What are you doing here?
    
    Dobby has come to rescue
    Harry Potter, of course.
    
    Dobby will always be there
    for Harry Potter.
    
    You can Apparate in and out of this room?
    Could you take us with you?
    
    Of course, sir. I'm an elf.
    
    Works for me.
    
    Dobby, I want you to take Luna
    and Mr. Ollivander--
    
    Shell Cottage
    on the outskirts of Tinworth.
    
    Trust me.
    
    Whenever you're ready, sir.
    
    Sir? I like her very much.
    
    Meet me at the top of the stairs
    in 10 seconds.
    
    Ow.
    
    Who gets his wand?
    
    I'm only going to
    ask you once more, goblin.
    
    Think very, very carefully
    before you answer.
    
    I don't know.
    
    You don't know?
    Why weren't you doing your job?
    
    Who got into my vault?
    
    Who stole it? Who stole it? Well?
    
    When I was last in your vault,
    the sword was there.
    
    Oh, well then, perhaps
    it just walked out on its own then.
    
    There is no place safer than Gringotts.
    
    Liar!
    
    Consider yourself lucky, goblin.
    
    The same won't be said for this one.
    
    Like hell.
    
    Expelliarmus!
    
    Stupefy.
    
    Stop!
    
    Drop your wands.
    
    I said, drop them!
    
    Pick them up, Draco, now.
    
    Well, well, well,
    look what we have here.
    
    It's Harry Potter.
    
    He's all bright and shiny and new again,
    just in time for the Dark Lord.
    
    Call him.
    
    Call him.
    
    Stupefy!
    
    Stupid elf.
    
    - You could've killed me.
    - Dobby never meant to kill.
    
    Dobby only meant to maim
    or seriously injure.
    
    How dare you take a witch's wand?
    
    How dare you defy your masters?
    
    Dobby has no master.
    
    Dobby is a free elf.
    
    And Dobby has come
    to save Harry Potter and his friends.
    
    Hermione.
    
    You're all right. We're safe.
    
    We're all safe.
    
    Harry Potter.
    
    Dobby.
    
    Dobby. No, just-- Hold on.
    
    Hold on. Look, just hold on, okay?
    
    We'll fix you.
    
    Hermione will have something.
    
    In your bag. Hermione?
    
    Hermione?
    
    What is it? Help me.
    
    Such a beautiful place...
    
    ...to be with friends.
    
    Dobby is happy to be with his friend...
    
    ...Harry Potter.
    
    We should close his eyes.
    
    Don't you think?
    
    There.
    
    Now he could be sleeping.
    
    I want to bury him.
    
    Properly. Without magic.";
        $HP8 = "WWW.MY-SUBS.COM
    
    [GROUP MARCHING NEARBY]
    
    it's beautiful here.
    
    It was our aunt's.
    
    We used to come here as kids.
    
    The Order uses it now as a safe house.
    
    What's left of us, at least.
    
    Muggles think these keep evil away,
    but they're wrong.
    
    I need to talk to the goblin.
    
    How are you?
    
    Alive.
    
    You probably don't remember--
    
    That I showed you to your vault
    the first time you came to Gringotts?
    
    Even amongst goblins you're famous,
    Harry Potter.
    
    You buried the elf.
    
    Yes.
    
    GRIPHOOK:
    And brought me here.
    
    You are...
    
    ...a very unusual wizard.
    
    How did you come by this sword?
    
    It's complicated.
    
    Why did Bellatrix Lestrange think it
    should be in her vault at Gringotts?
    
    It's complicated.
    
    The sword presented itself to us
    in a moment of need.
    
    We didn't steal it.
    
    There is a sword in Madam Lestrange's
    vault identical to this one...
    
    ...but it is a fake.
    
    It was placed there this summer.
    
    - And she never suspected it was a fake?
    - The replica is very convincing.
    
    Only a goblin would recognize
    that this is the true sword of Gryffindor.
    
    Who is the acquaintance?
    
    A Hogwarts professor.
    As I understand it, he's now headmaster.
    
    Snape?
    
    He put a fake sword in Bellatrix's vault?
    
    Why?
    
    There are more than a few curious things
    in the vaults at Gringotts.
    
    And in Madam Lestrange's vault as well?
    
    Perhaps.
    
    I need to get into Gringotts.
    Into one of the vaults.
    
    This is impossible.
    
    Alone, yes. But with you, no.
    
    GRIPHOOK:
    Why should I help you?
    
    I have gold. Lots of it.
    
    - I have no interest in gold.
    HARRY: Then what?
    
    That
    
    That is my price.
    
    HERMIONE: Are you thinking
    there's a Horcrux in Bellatrix's vault?
    
    HARRY: She was terrified when she
    thought we'd been in there.
    
    She kept asking you
    what else we'd taken.
    
    I bet you there's a Horcrux in there,
    another piece of his soul.
    
    Let's find it and kill it,
    we're one step closer to killing him.
    
    RON:
    And what happens when we find it?
    
    How are we supposed to destroy it
    now you've given the sword to Griphook?
    
    HARRY:
    I'm still working on that part.
    
    He's weak.
    
    Yes?
    
    Mr. Ollivander, I need to ask you
    a few questions.
    
    OLLIVANDER:
    Anything, my boy, anything.
    
    HARRY:
    Would you mind identifying this wand?
    
    We need to know if it's safe to use.
    
    Walnut.
    
    Dragon heartstring.
    
    Twelve and three-quarter inches.
    
    Unyie--
    
    Unyielding.
    
    This belonged to Bellatrix Lestrange.
    
    Treat it carefully.
    
    And this?
    
    Hawthorn.
    
    And unicorn hair.
    
    Ten inches. Reasonably pliant.
    
    This was the wand of Draco Malfoy.
    
    Was? Is it not still?
    
    Well, perhaps not, if you won it from him.
    
    I sense its allegiance has changed.
    
    You talk about wands
    as if they have feelings...
    
    ...can think.
    
    The wand chooses the wizard, Mr. Potter.
    
    That much has always been clear
    to those of us who have studied wandlore.
    
    And what do you know
    about the Deathly Hallows?
    
    It is rumored there are three:
    
    The Elder Wand...
    
    ...the Cloak of Invisibility
    to hide you from your enemies...
    
    ...and the Resurrection Stone
    to bring back loved ones from the dead.
    
    Together, they make one
    the master of death.
    
    But few truly believe
    that such objects exist.
    
    HARRY:
    Do you?
    
    Do you believe they exist, sir?
    
    I see no reason to put stock
    into an old wives' tale.
    
    You're lying.
    
    You know one exists.
    
    You told him about it.
    
    You told him about the Elder Wand
    and where he could go looking for it.
    
    He tortured me.
    
    Besides...
    
    ...I only conveyed rumors.
    
    There's ...
    
    There's no telling whether he will find it.
    
    He has found it, sir.
    
    We'll let you rest.
    
    OLLIVANDER:
    He's after you, Mr. Potter.
    
    If it's true, what you say,
    and he has the Elder Wand...
    
    ...I'm afraid...
    
    ...you really don't stand a chance.
    
    Well, I suppose I'll have to kill him
    before he finds me, then.
    
    RON:
    Are you sure that's hers?
    
    Positive.
    
    Well?
    
    How do I look?
    
    RON:
    Hideous.
    
    You can give that to Hermione to hold,
    all right, Griphook?
    
    We're relying on you.
    
    If you get us past the guards
    and into the vault, the sword's yours.
    
    Madam Lestrange.
    
    HERMIONE:
    Good morning.
    
    GRIPHOOK:
    'Good morning'? 'Good morning'?
    
    You're Bellatrix Lestrange,
    not some dewy-eyed school girl.
    
    RON:
    Hey. Easy.
    
    She gives us away, we might as well
    use that sword to slit our own throats.
    
    Understand?
    
    No, he's right. I was being stupid.
    
    HARRY:
    Okay.
    
    Let's do it.
    
    [PEN SCRATCHING PAPER]
    
    [CLEARS THROAT]
    
    I wish to enter my vault.
    
    Identification?
    
    I hardly think that'll be necessary.
    
    Madam Lestrange.
    
    I don't like to be kept waiting.
    
    GRIPHOOK:
    They know.
    
    They know she's an imposter.
    
    They've been warned.
    
    Harry?
    
    What do we do, Harry?
    
    Madam Lestrange,
    would you mind presenting your wand?
    
    And why should I do that?
    
    It's the bank's policy. I'm sure you
    understand given the current climate.
    
    No. I most certainly do not understand.
    
    I'm afraid I must insist.
    
    HARRY [WHISPERS]:
    Imperio.
    
    [SNIFFS THEN SIGHS]
    
    Very well, Madam Lestrange.
    If you will follow me.
    
    HARRY:
    What is that, Griphook?
    
    [SQUEAKING AND GRINDING]
    
    Griphook.
    
    [ALL PANTING]
    
    [ALARM SCREECHING]
    
    [SCREAMING]
    
    HERMIONE:
    Arresto momentum.
    
    [ALL GRUNT]
    
    HARRY:
    Well done, Hermione.
    
    [ALARM CONTINUES SCREECHING
    IN DISTANCE]
    
    Oh, no, you look like you again.
    
    The Thief's Downfall.
    Washes away all enchantments.
    
    Can be deadly.
    
    You don't say.
    
    Just out of interest,
    is there any other way out of here?
    
    No.
    
    What the devil are all you
    doing down here?
    
    Thieves!
    
    - When you gave up the keys, you--
    -lmperio.
    
    [SNIFFS THEN SIGHS]
    
    [CREATURE ROARS NEARBY]
    
    That doesn't sound good.
    
    [GROWLING]
    
    RON:
    Bloody hell.
    
    That's a Ukrainian Ironbelly.
    
    Here.
    
    [ROARING]
    
    it's been trained to expect pain
    when it hears the noise.
    
    HERMIONE:
    That's barbaric.
    
    Lumos.
    
    Blimey.
    
    Accio Horcrux.
    
    You're not trying that one again,
    are you?
    
    GRIPHOOK:
    That kind of magic won't work in here.
    
    RON:
    Is it in here, Harry?
    
    Can you feel anything?
    
    [HISSING AND WHISPERING FAINTLY]
    
    [HERMIONE GASPS]
    
    That's it. Up there.
    
    They've added the Gemino curse.
    Everything you touch will multiply.
    
    Give me the sword.
    
    Stop moving.
    
    Got it.
    
    We had a deal, Griphook.
    
    The cup for the sword.
    
    I said I'd get you in.
    I didn't say anything about getting you out.
    
    HARRY:
    Griphook!
    
    GRIPHOOK: Thieves! Help!
    - Griphook!
    
    Thieves!
    
    [BOGROD CHUCKLES]
    
    Foul little git.
    Least we've still got Bogrod.
    
    That's unfortunate.
    
    HERMIONE: We can't just stand here.
    Who's got an idea?
    
    You're the brilliant one.
    
    I've got something, but it's mad.
    
    Reducto.
    
    Well, come on, then.
    
    Relashio.
    
    [RUMBLING FAINTLY]
    
    [ALL YELLING]
    
    GOBLIN:
    He's moving! Aah!
    
    [PANTING]
    
    RON:
    Now what?
    
    Reducto.
    
    Hold on.
    
    RON:
    That was brilliant. Absolutely brilliant.
    
    HARRY:
    We're dropping.
    
    RON: I say we jump.
    - When?
    
    Now.
    
    [YELLS]
    
    [GASPING]
    
    [ALL PANTING]
    
    He knows. You-Know-Who.
    
    He knows we broke into Gringotts.
    
    He knows what we took
    and he knows we're hunting Horcruxes.
    
    - How is it you know?
    - I saw him.
    
    HERMIONE:
    You let him in? Harry, you can't do that.
    
    Hermione, I can't always help it.
    Well, maybe I can. I don't know.
    
    RON:
    Never mind. What happened?
    
    Well, he's angry.
    
    And scared too.
    
    He knows if we find and destroy all
    the Horcruxes we'll be able to kill him.
    
    I reckon he'll stop at nothing
    to make sure we don't find the rest.
    
    There's more. One of them's at Hogwarts.
    
    HERMIONE:
    What?
    
    - You saw it?
    - I saw the castle and Rowena Ravenclaw.
    
    It must have to do with her.
    We have to go there now.
    
    We can't do that. We've got to plan.
    We've got to figure it out.
    
    Hermione, when have any of our plans
    ever actually worked?
    
    We plan, we get there,
    all hell breaks loose.
    
    He's right.
    
    One problem: Snape's headmaster now.
    We can't just walk through the front door.
    
    Um, well, we'll go to Hogsmeade,
    to Honeydukes.
    
    Take the secret passage in the cellar.
    
    It's-- There's something wrong with him.
    
    It's like, you know, in the past, I've always
    been able to follow his thoughts.
    
    And now everything
    just feels disconnected.
    
    Maybe it's the Horcruxes.
    
    Maybe he's growing weaker.
    Maybe he's dying.
    
    No. No, it's more like he's wounded.
    
    If anything, he feels more dangerous.
    
    VOLDEMORT [IN PARSELTONGUE]:
    
    [NAGINI HISSES]
    
    [ALARM SCREECHING]
    
    [MEN SHOUTING NEARBY]
    
    MAN 1: They're here!
    MAN 2: Search everywhere!
    
    MAN 1: Look down by the stables!
    You two, come with me!
    
    MAN 3:
    Any sign?
    
    [ALARM SCREECHING]
    
    MAN 4:
    Potter!
    
    OLD MAN:
    In here, Potter.
    
    Did you get a look at him?
    
    - For a second, I thought it was ...
    HERMIONE: I know. Dumbledore.
    
    [MEN CHATTERING NEARBY]
    
    Harry?
    
    I can see you in this.
    
    [DOOR OPENS]
    
    You bloody fools.
    What were you thinking coming here?
    
    Have you any idea how dangerous it is?
    
    You're Aberforth, Dumbledore's brother.
    
    It's you who I've been seeing in here.
    
    You're the one who sent Dobby.
    
    Where have you left him?
    
    He's dead.
    
    Sorry to hear it. I liked that elf.
    
    Who gave that to you? The mirror?
    
    Mundungus Fletcher, about a year ago.
    
    - Dung had no right. It belonged to--
    ABERFORTH: Sirius.
    
    Albus told me.
    
    He also told me you'd likely be hacked off
    if you ever found out I had it...
    
    ...but ask yourself,
    where would you be if I didn't?
    
    Do you hear from the others much?
    From the Order?
    
    The Order's finished.
    
    You-Know-Who's won.
    
    Anyone who says otherwise
    is kidding themselves.
    
    We need to get into Hogwarts, tonight.
    
    Dumbledore gave us a job to do.
    
    Did he now?
    
    Nice job? Easy?
    
    We've been hunting Horcruxes.
    
    We think the last one's inside the castle,
    but we'll need help getting in.
    
    That's not a job my brother's given you.
    It's a suicide mission.
    
    Do yourself a favor, boy, go home.
    Live a little longer.
    
    - Dumbledore trusted me to see this through.
    - What makes you think you can trust him?
    
    You think you can believe
    anything my brother told you?
    
    In all the time you knew him,
    did he ever mention my name?
    
    Did he ever mention hers?
    
    - Why should he--?
    - Keep secrets? You tell me.
    
    - I trusted him.
    - That's a boy's answer.
    
    A boy who goes chasing Horcruxes
    on the word of a man...
    
    ...who wouldn't even tell him where to start.
    You're lying!
    
    Not just to me, that doesn't matter.
    To yourself as well.
    
    That's what a fool does.
    
    You don't strike me as a fool,
    Harry Potter.
    
    So I'll ask you again.
    There must be a reason.
    
    I'm not interested in what happened
    between you and your brother.
    
    I don't care that you've given up.
    
    I trusted the man I knew.
    
    And we need to get into
    the castle tonight.
    
    You know what to do.
    
    HARRY:
    Where have you sent her?
    
    You'll see soon enough.
    
    That's your sister, Ariana, isn't it?
    
    She died very young, didn't she?
    
    My brother sacrificed many things,
    Mr. Potter...
    
    ...on his journey to find power...
    
    ...including Ariana.
    
    And she was devoted to him.
    
    He gave her everything...
    
    ...but time.
    
    HERMIONE:
    Thank you, Mr. Dumbledore.
    
    [DOOR CLOSES]
    
    He did save our lives twice.
    
    Kept an eye on us in that mirror.
    
    [WHISPERS] That doesn't seem
    like someone who's given up.
    
    She's coming back.
    
    RON:
    Who's that with her?
    
    Neville.
    
    - Oh, you look--
    - Like hell, I reckon.
    
    This is nothing. Seamus is worse.
    
    Hey, Ab, we've got a couple more
    coming through.
    
    RON: Don't remember this
    on the Marauder's Map.
    
    That's because it never existed till now.
    
    The seven secret passages were sealed off
    before the start of the year.
    
    This is the only way in or out now.
    
    The grounds are crawling with
    Death Eaters and Dementors.
    
    HERMIONE:
    How bad is Snape as headmaster?
    
    Hardly ever see him.
    It's the Carrows you need to watch out for.
    
    Carrows?
    
    Yeah. Brother and sister.
    In charge of discipline.
    
    They like punishment, the Carrows.
    
    HERMIONE:
    They did that to you? Why?
    
    NEVILLE: Today's Dark Arts lessons
    had us practicing the Cruciatus Curse.
    
    On first-years.
    
    I refused.
    
    Hogwarts has changed.
    
    Let's have a bit of fun, shall we?
    
    Hey, listen up, you lot.
    Brought you a surprise.
    
    Not more of Aberforth's cooking, I hope.
    Be a surprise if we can digest it.
    
    Blimey.
    
    - Harry!
    - Yeah!
    
    Get the word out to Remus and the others
    that Harry's back.
    
    Okay, let's not kill him before
    You-Know-Who--
    
    River, D.A. calling. Do you read?
    
    We have a new weather report:
    Lightning has struck.
    
    What's the plan, Harry?
    
    HARRY:
    Okay.
    
    There's something we need to find.
    
    Something hidden here in the castle.
    And it may help us defeat You-Know-Who.
    
    Right. What is it?
    
    We don't know.
    
    NEVILLE: Where is it?
    HARRY: We don't know that either.
    
    - I realize it's not much to go on.
    - That's nothing to go on.
    
    I think it has something to do
    with Ravenclaw.
    
    Um, it'll be small, easily concealed.
    
    Anyone, any ideas?
    
    Well, there's Rowena Ravenclaw's
    lost diadem.
    
    - Oh, bloody hell. Here we go.
    LUNA: Lost diadem of Ravenclaw?
    
    Hasn't anyone heard of it?
    It's quite famous.
    
    Yes, but, Luna, it's lost,
    for centuries now.
    
    There isn't a person alive today
    who's seen it.
    
    Excuse me. Can someone tell me
    what a bloody diadem is?
    
    It's a sort of crown.
    You know, like a tiara.
    
    [RUMBLING]
    
    Harry.
    
    Hi there.
    
    Six months she hasn't seen me
    and it's like I'm Frankie First-Year.
    
    - I'm her brother.
    - Got lots of those.
    
    - There's only one Harry.
    - Shut up, Seamus.
    
    What is it, Ginny?
    
    Snape knows. He knows that Harry
    was spotted in Hogsmeade.
    
    [GROUP MARCHING]
    
    Many of you are surely wondering
    why I have summoned you at this hour.
    
    It's come to my attention
    that earlier this evening...
    
    ...Harry Potter was sighted
    in Hogsmeade.
    
    [MURMURING]
    
    Now...
    
    ...should anyone...
    
    ...student or staff,
    attempt to aid Mr. Potter...
    
    ...they will be punished...
    
    ...in a manner consistent with
    the severity of their transgression.
    
    Furthermore...
    
    ...any person found to have knowledge
    of these events...
    
    ...who fails to come forward...
    
    ...will be treated as...
    
    ...equally guilty.
    
    Now then...
    
    ...if anyone here...
    
    ...has any knowledge of Mr. Potter's
    movements this evening...
    
    ...I invite them to step forward...
    
    ...now.
    
    [MURMURING]
    
    It seems, despite your exhaustive
    defensive strategies...
    
    ...you still have a bit of a security problem,
    headmaster.
    
    And I'm afraid it's quite extensive.
    
    How dare you stand where he stood?
    
    Tell them how it happened that night.
    
    Tell them how you looked him in the eye,
    a man who trusted you, and killed him.
    
    Tell them.
    
    [WIZARDS GRUNT]
    
    McGONAGALL:
    Coward!
    
    [STUDENTS CHEERING]
    
    VOLDEMORT:
    Harry.
    
    McGONAGALL:
    Potter?
    
    [RUMBLING]
    
    [GIRL 1 SCREAMING]
    
    [GIRL 2 SCREAMING]
    
    [GIRL 3 SCREAMING]
    
    VOLDEMORT:
    I know that many of you will want to fight.
    
    Some of you may even think
    that to fight is wise.
    
    But this is folly.
    
    Give me Harry Potter.
    
    Do this and none shall be harmed.
    
    Give me Harry Potter
    and I shall leave Hogwarts untouched.
    
    Give me Harry Potter...
    
    ...and you will be rewarded.
    
    You have one hour.
    
    PANSY:
    What are you waiting for?
    
    Someone grab him.
    
    FILCH:
    Students out of bed.
    
    Students out of bed!
    
    Students in the corridor!
    
    They are supposed to be out of bed,
    you blithering idiot.
    
    Oh.
    
    Sorry, ma'am.
    
    As it happens, Mr. Filch,
    your arrival is most opportune.
    
    If you would, I would like you, please...
    
    ...to lead Miss Parkinson and the rest
    of Slytherin House from the hall.
    
    Exactly where is it
    I'll be leading them to, ma'am?
    
    The dungeons would do.
    
    [CHEERING]
    
    FILCH:
    Right. Come on. Come on.
    
    I presume you have a reason for returning,
    Potter. What is it you need?
    
    Time, professor.
    As much as you can get me.
    
    Do what you have to do.
    I'll secure the castle.
    
    Potter.
    
    It's good to see you.
    
    It's good to see you too, professor.
    
    Hold the fort, Neville.
    
    [STUDENTS CHATTERING]
    
    GIRL:
    Hurry up, come on!
    
    RON: Harry. Hermione and I
    have been thinking.
    
    It doesn't matter if we find a Horcrux.
    
    - What do you mean?
    - Unless we can destroy it.
    
    RON:
    So we were thinking ...
    
    Ron was thinking.
    It was Ron's idea. It's brilliant.
    
    You destroyed Tom Riddle's diary
    with a basilisk fang, right?
    
    Me and Hermione
    know where we might find one.
    
    Okay.
    
    Okay, but take this. That way you can
    find me when you get back.
    
    - Where are you going?
    - Ravenclaw common room.
    
    Gotta start somewhere.
    
    LUNA:
    Harry. Harry!
    
    Let me get this straight.
    You're giving us permission to do this?
    
    That is correct, Longbottom.
    
    To blow it up? Boom?
    
    Boom!
    
    Wicked. But how on earth
    are we gonna do that?
    
    Why don't you confer with Mr. Finnigan?
    
    As I recall, he has a particular proclivity
    for pyrotechnics.
    
    I can bring it down.
    
    That's the spirit. Now away you go.
    
    You do realize, of course, we can't keep out
    You-Know-Who indefinitely.
    
    McGONAGALL: Well, that doesn't mean
    we can't delay him.
    
    And his name is Voldemort, Filius.
    You might as well use it.
    
    He's going to try to kill you either way.
    
    Piertotum Locomotor.
    
    Hogwarts is threatened.
    
    Man the boundaries. Protect us.
    Do your duty to our school.
    
    I've always wanted to use that spell.
    
    Protego Maxima. Fianto Duri.
    Repello lnimicum.
    
    Protego Maxima.
    
    - Harry, wait. I need to talk to you.
    - I'm a bit preoccupied at the moment, Luna.
    
    You won't find anything
    where you're going. You're wasting time.
    
    - Look, we'll talk later, okay, Luna?
    - Harry.
    
    - Later.
    - Harry Potter!
    
    You listen to me right now!
    
    Don't you remember what Cho said
    about Rowena Ravenolaw's diadem?
    
    'There's not a person alive
    who's seen it.'
    
    it's obvious, isn't it?
    We have to talk to someone who's dead.
    
    It's very impressive, isn't it?
    
    If you're to find her,
    you'll find her down there.
    
    HARRY: Aren't you coming?
    LUNA: No.
    
    I think it's best if you two talk alone.
    
    She's very shy.
    
    HARRY:
    You're the Grey Lady...
    
    ...the Ghost of Ravenclaw Tower.
    
    I do not answer to that name.
    
    No, I'm sorry, I'm sorry.
    It's Helena, isn't it? Helena Ravenclaw.
    
    Rowena's daughter.
    
    Are you a friend of Luna's?
    
    HARRY:
    Yes.
    
    And she thought you might be able
    to help me.
    
    You seek my mother's diadem.
    
    Yes.
    
    That's right.
    
    Luna is kind,
    unlike so many of the others.
    
    But she was wrong. I cannot help you.
    
    Wait. Please.
    
    I want to destroy it.
    
    [VOLDEMORT CHUCKLES]
    
    VOLDEMORT:
    They never learn.
    
    Such a pity.
    
    But, my Lord...
    
    ...shouldn't we wait for...?
    
    My Lord.
    
    Begin.
    
    [RUMBLING]
    
    That's what you want too,
    isn't it, Helena?
    
    You want it destroyed.
    
    Another swore to destroy it
    many years ago...
    
    ...a strange boy with a strange name.
    
    - Tom Riddle.
    - But he lied.
    
    He's lied to many people.
    
    I know what he's done! I know who he is!
    
    He defiled it with dark magic!
    
    HARRY:
    I can destroy it once and for all.
    
    But only if you tell me where he hid it.
    
    You do know where he hid it,
    don't you, Helena?
    
    You just have to tell me.
    
    Please.
    
    Strange.
    
    You remind me of him a bit.
    
    It's here...
    
    ...in the castle, in the place where
    everything is hidden.
    
    If you have to ask...
    
    ...you will never know.
    
    If you know, you need only ask.
    
    Thank you.
    
    [STUDENTS CLAMORING]
    
    Tell Professor McGONAGALL Remus and I
    will handle this side of the castle.
    
    Yes, sir.
    
    SHACKLEBOLT: Hey, Dean, on second
    thoughts, tell Professor McGONAGALL...
    
    ...we might need one or two more wands
    this side.
    
    REMUS: It is the quality of one's
    convictions that determines success...
    
    ...not the number of followers.
    
    Who said that?
    
    Me.
    
    You okay, Freddie?
    
    Yeah.
    
    Me too.
    
    [SPEAKING IN PARSELTONGUE]
    
    Harry talks in his sleep.
    Have you noticed?
    
    No, of course not.
    
    [YELLING AND SCREAMING
    IN DISTANCE]
    
    Yeah?
    
    You and whose army?
    
    - You do it.
    - I can't.
    
    Yes, you can.
    
    [YELLS]
    
    [GASPS]
    
    [BOTH CHUCKLE]
    
    [WAILS]
    
    [RUMBLING]
    
    [GRUNTS]
    
    [YELLING]
    
    GINNY:
    Neville!
    
    [PANTING]
    
    That went well.
    
    McGONAGALL: Get inside!
    This way, everyone. Take cover!
    
    [SCREAMING]
    
    HARRY:
    Stupefy!
    
    Get your coat on!
    
    Ginny. Neville. Are you all right?
    
    Never better. I feel like I could spit fire.
    You haven't seen Luna, have you?
    
    - Luna?
    - I'm mad for her!
    
    I think it's about time I told her
    since we'll probably both be dead by dawn.
    
    I know.
    
    [DRACO GRUNTS]
    
    Bloody hell. We'll never find it on this.
    
    - There he is, just there.
    RON: Brilliant.
    
    He just vanished. Just now. I saw it.
    
    [RUMBLING]
    
    Maybe he's gone to
    the Room of Requirement.
    
    It doesn't show up on the map, does it?
    You said that last year.
    
    That's right. I-- I did.
    
    Let's go.
    
    Brilliant.
    
    DRACO:
    Come on!
    
    [VOICES WHISPERING]
    
    [HIGH-PITCHED RINGING]
    
    DRACO:
    Well, well.
    
    What brings you here, Potter?
    
    I could ask you the same.
    
    You have something of mine.
    
    I'd like it back.
    
    - What's wrong with the one you have?
    DRACO: it's my mother's.
    
    It's powerful, but it's not the same.
    
    Doesn't quite understand me.
    
    Know what I mean?
    
    Why didn't you tell her?
    
    Bellatrix.
    
    You knew it was me.
    You didn't say anything.
    
    Come on, Draco.
    Don't be a prat. Do him.
    
    DRACO:
    Easy.
    
    Expelliarmus.
    
    Avada Kedavra!
    
    Stupefy!
    
    [YELLS]
    
    RON:
    That's my girlfriend, you numpties!
    
    [HARRY PANTING AND COUGHING]
    
    [CHATTERING]
    
    [SCREECHING]
    
    HARRY:
    Got it.
    
    RON:
    Run!
    
    Run!
    
    [RON SCREAMING]
    
    Goyle's setting the bloody place on fire!
    
    [ROARS]
    
    [SCREAMS]
    
    Come on! This way!
    
    We can't leave them.
    
    He's joking, right?
    
    If we die for them, Harry,
    I'm gonna kill you.
    
    [GRUNTING]
    
    HERMIONE:
    Harry!
    
    [HISSES]
    
    [PANTING AND GROANING]
    
    My Lord?
    
    Avada Kedavra!
    
    Come, Nagini. I need to keep you safe.
    
    [PANTING]
    
    HARRY:
    it's the snake.
    
    She's the last one. it's the last Horcrux.
    
    RON:
    Look inside him, Harry.
    
    Find out where he is.
    If we find him, we can find the snake.
    
    Then we can end this.
    
    LUCIUS:
    My Lord?
    
    Might it be less, uh ...
    
    Might it not be more prudent
    to call off this attack...
    
    ...and simply seek the boy yourself?
    
    VOLDEMORT:
    I do not need to seek the boy.
    
    Before the night is out, he will come to me.
    Do you understand?
    
    Look at me.
    
    How can you live with yourself, Lucius?
    
    I don't know.
    
    Go and find Severus.
    
    Bring him to me.
    
    I know where he is.
    
    OLIVER:
    Come on!
    
    [YELLS]
    
    [GRUNTING]
    
    [SPIDERS SQUEAKING]
    
    BOY:
    Crucio!
    
    HERMIONE:
    No!
    
    SNAPE: You have performed extraordinary
    magic with this wand, my Lord...
    
    ...in the last few hours alone.
    
    VOLDEMORT:
    No.
    
    No, I am extraordinary...
    
    ...but the wand resists me.
    
    SNAPE:
    There is no wand more powerful.
    
    Ollivander himself has said it.
    
    Tonight, when the boy comes,
    it will not fail you. I am sure of it.
    
    It answers to you...
    
    ...and you only.
    
    Does it?
    
    My Lord?
    
    The wand, does it truly answer to me?
    
    You're a clever man, Severus.
    
    Surely you must know.
    
    Where does its true loyalty lie?
    
    SNAPE;
    with you...
    
    ...of course, my Lord.
    
    VOLDEMORT:
    The Elder Wand...
    
    ...cannot serve me properly
    because I em not its true master.
    
    The Elder Wand belongs to the wizard
    who killed its last owner.
    
    You killed Dumbledore, Severus.
    
    While you live,
    the Elder Wand cannot truly be mine.
    
    You've been a good and faithful servant,
    Severus...
    
    ...but only I can live forever.
    
    My Lord--
    
    [THUDS]
    
    VOLDEMORT:
    Nagini, kill.
    
    [SNAPE GASPING]
    
    SNAPE:
    Take them.
    
    Take them.
    
    Please.
    
    Give me something. Quickly.
    A flask, anything.
    
    SNAPE:
    Take them to the Pensieve.
    
    Look at me.
    
    You have your mother's eyes.
    
    [SIGHS]
    
    VOLDEMORT:
    You have fought valiantly...
    
    ...but in vain.
    
    I do not wish this.
    
    Every drop of magical blood spilled
    is a terrible waste.
    
    I therefore command my forces to retreat.
    
    In their absence,
    dispose of your dead with dignity.
    
    Harry Potter, I now speak directly to you.
    
    On this night, you have allowed
    your friends to die for you...
    
    ...rather than face me yourself
    
    There is no greater dishonor.
    
    Join me in the Forbidden Forest
    and confront your fate.
    
    If you do not do this...
    
    ...I shall kill every last man,
    woman and child...
    
    ...who tries to conceal you from me.
    
    HERMIONE:
    Where is everybody?
    
    Harry.
    
    SPROUT: Oh, come on.
    Whats the matter with you?
    
    TRELAWNEY:
    Oh, she's passed.
    
    There, she's gone.
    
    [SOBBING]
    
    PETUNIA:
    Freak!
    
    Come here.
    
    I'm gonna tell Mummy. You're a freak.
    
    You're a freak, Lily!
    
    Come here.
    
    SNAPE: She's jealous because
    she's ordinary and you're special.
    
    LILY:
    That's mean, Severus.
    
    [LILY LAUGHING]
    
    SORTING HAT:
    Gryffindor!
    
    [STUDENTS APPLAUDING]
    
    - Hi. I'm James.
    - Hi. I'm Lily.
    
    SNAPE:
    Just like your father. Lazy. Arrogant.
    
    HARRY:
    Don't say a word against my father.
    
    TRELAWNEY:
    Blood shall be spilt...
    
    ...and servant and master
    shall be reunited once more.
    
    VOLDEMORT:
    Severus.
    
    SNAPE:
    No. Don't kill me.
    
    DUMBLEDORE:
    The prophecy did not refer to a woman.
    
    It spoke of a boy born at the end of July.
    
    Yes, but he thinks it's her son.
    
    He intends to hunt them down now,
    to kill them.
    
    Hide her. Hide them all. I beg you.
    
    DUMBLEDORE: What will you give me
    in exchange, Severus?
    
    Anything.
    
    LILY:
    Harry. Harry, you are so loved. So loved.
    
    Harry, Mama loves you.
    
    Dada loves you.
    
    Harry, be safe.
    
    Be strong.
    
    VOLDEMORT:
    Avada Kedavra!
    
    [SCREAMS]
    
    SNAPE:
    You said you would keep her safe.
    
    DUMBLEDORE: Lily and James put
    their faith in the wrong person, Severus.
    
    Rather like you.
    
    The boy survives.
    
    He doesn't need protection.
    The Dark Lord is gone.
    
    The Dark Lord will return.
    
    And when he does,
    the boy will be in terrible danger.
    
    He has her eyes.
    
    If you truly loved her ...
    
    No one can know.
    
    DUMBLEDORE: That I should never reveal
    the best of you, Severus?
    
    SNAPE:
    Your word.
    
    DUMBLEDORE: When you risk your life
    every day to protect the boy?
    
    SNAPE: He possesses no measurable talent,
    his arrogance rivals that of his father...
    
    ...and he seems to relish his fame.
    
    HARRY:
    Don't say a word against my father.
    
    SNAPE:
    James Potter?
    
    Lazy, arrogant.
    
    HARRY:
    My father was a great man.
    
    Your father was a swine!
    
    SNAPE:
    Drink the rest.
    
    It will contain the curse to your hand
    for the time being.
    
    It will spread, Albus.
    
    DUMBLEDORE:
    How long?
    
    SNAPE:
    Maybe a year.
    
    Don't ignore me, Severus.
    
    DRACO:
    Harmonia Nectere Passus.
    
    We both know Lord Voldemort
    has ordered the Malfoy boy to murder me.
    
    But should he fail,
    one should presume the Dark Lord...
    
    ...will turn to you.
    
    You must be the one to kill me, Severus.
    
    It is the only way.
    
    Only then will the Dark Lord
    trust you completely.
    
    SNAPE:
    Avada Kedavra.
    
    DUMBLEDORE: There will come a time
    when Harry Potter must be told something.
    
    But you must wait until Voldemort
    is at his most vulnerable.
    
    Must be told what?
    
    DUMBLEDORE:
    On the night Lord Voldemort...
    
    ...went to Godric's Hollow to kill Harry...
    
    ...and Lily Potter cast herself
    between them...
    
    ...the curse rebounded.
    
    When that happened,
    a part of Voldemort's soul...
    
    ...latched itself onto the only living thing
    it could find:
    
    Harry himself
    
    There 's a reason Harry can speak
    with snakes.
    
    There's a reason he can look into
    Lord Voldemort's mind.
    
    A part of Voldemort lives inside him.
    
    So when the time comes...
    
    ...the boy must die?
    
    Yes. Yes.
    
    He must die.
    
    You've kept him alive
    so that he can die at the proper moment.
    
    You've been raising him
    like a pig for slaughter.
    
    Don't tell me now that you've grown
    to care for the boy?
    
    SNAPE:
    Expecto Patronum.
    
    Lily.
    
    After all this time ?
    
    Always.
    
    So when the time comes...
    
    ...the boy must die?
    
    Yes. He must die.
    
    And Voldemort himself must do it.
    
    That is essential.
    
    HERMIONE:
    Where've you been?
    
    - We thought you went to the forest.
    - I'm going there now.
    
    RON:
    Are you mad? No.
    
    You can't give yourself up to him.
    
    HERMIONE:
    What is it, Harry?
    
    What is it you know?
    
    There's a reason I can hear them...
    
    ...the Horcruxes.
    
    I think I've known for a while.
    
    And I think you have too.
    
    - I'll go with you.
    - No, kill the snake.
    
    Kill the snake and then it's just him.
    
    I'm ready to die.
    
    The Resurrection Stone.
    
    You've been so brave, sweetheart.
    
    Why are you here?
    
    All of you?
    
    We never left.
    
    Does it--?
    
    Does it hurt'?
    
    Dying?
    
    Quicker than falling asleep.
    
    You're nearly there, son.
    
    HARRY:
    I'm sorry.
    
    I never wanted any of you to die for me.
    
    And, Remus, your son ...
    
    Others will tell him
    what his mother and father died for.
    
    One day, he'll understand.
    
    You'll stay with me?
    
    Until the end.
    
    And he won't be able to see you?
    
    SIRIUS:
    No.
    
    We're here, you see.
    
    Stay close to me.
    
    Always.
    
    DEATH EATER:
    No sign of him, my Lord.
    
    VOLDEMORT:
    I thought he would come.
    
    Harry? No! What are you doing here?
    
    Quiet!
    
    Harry Potter.
    
    The Boy Who Lived.
    
    Come to die.
    
    Avada Kedavra!
    
    [MAN BREATHING FAINTLY]
    
    DUMBLEDORE:
    You can't help. Harry...
    
    ...you wonderful boy.
    
    You brave, brave man.
    
    Let us walk.
    
    Professor, what is that?
    
    Something beyond either of our help.
    
    A part of Voldemort sent here to die.
    
    And exactly where are we?
    
    I was going to ask you that.
    Where would you say that we are?
    
    Well...
    
    ...it looks like King's Cross station.
    
    Only cleaner.
    
    And without all the trains.
    
    King's Cross, is that right?
    
    This is, as they say, your party.
    
    I expect you now realize
    that you and Voldemort...
    
    ...have been connected by something
    other than fate...
    
    ...since that night in Godric's Hollow
    all those years ago.
    
    So it's true then, sir?
    
    A part of him lives within me, doesn't it?
    
    Did.
    
    It was just destroyed many moments ago
    by none other than Voldemort himself.
    
    You were the Horcrux
    he never meant to make, Harry.
    
    I have to go back, haven't I?
    
    Oh. That's up to you.
    
    I have a choice?
    
    Oh, yes.
    
    We're in King's Cross, you say?
    
    I think, if you so desired,
    you'd be able to board a train.
    
    And where would it take me?
    
    [DUMBLEDORE CHUCKLES]
    
    on.
    
    [TRAIN WHISTLE WAILS IN DISTANCE]
    
    Voldemort has the Elder Wand.
    
    True.
    
    - And the snake's still alive.
    - Yes.
    
    And I've nothing to kill it with.
    
    Help will always be given at Hogwarts,
    Harry, to those who ask for it.
    
    I've always prized myself
    on my ability to turn a phrase.
    
    Words are,
    in my not so humble opinion...
    
    ...our most inexhaustible
    source of magic...
    
    ...capable of both inflicting injury
    and remedying it.
    
    But I would, in this case,
    amend my original statement to this:
    
    Help will always be given at Hogwarts
    to those who deserve it.
    
    Do not pity the dead, Harry.
    
    Pity the living.
    
    And, above all,
    all those who live without love.
    
    Professor, my mother's Patronus
    was a doe, wasn't it?
    
    That's the same as Professor Snape's.
    
    It's curious, don't you think?
    
    Actually, if I think about it,
    it doesn't seem curious at all.
    
    I'll be going now, Harry.
    
    Professor?
    
    Is this all real?
    
    Gr is it just happening inside my head?
    
    Of course it's happening inside
    your head, Harry.
    
    Why should that mean that it's not real?
    
    Professor? What should I do?
    
    Professor?
    
    BELLATRIX:
    My Lord?
    
    My Lord, are you hurt? My Lord?
    
    I don't need your help.
    
    BELLATRIX:
    No. Come.
    
    The boy.
    
    Is he dead?
    
    [WHISPERS]
    Is he alive?
    
    Draco, is he alive?
    
    Dead.
    
    [THUDS]
    
    GINNY:
    Who is that Hagrid's carrying?
    
    Neville, who is it?
    
    VOLDEMORT:
    Harry Potter...
    
    ...is dead.
    
    No! No!
    
    VOLDEMORT:
    Silence.
    
    Stupid girl.
    
    Harry Potter is dead.
    
    From this day forth, you put your faith...
    
    ...in me.
    
    Harry Potter is dead!
    
    [ALL LAUGH]
    
    And now is the time to declare yourself.
    
    Come forward and join us.
    
    Or die.
    
    LUCIUS:
    Draco.
    
    Draco.
    
    NARCISSA:
    Draco...
    
    ...Come.
    
    VOLDEMORT:
    Ah. Well done, Draco.
    
    Well done.
    
    Well, I must say I'd hoped for better.
    
    [VOLDEMORT'S FOLLOWERS LAUGH]
    
    And who might you be, young man?
    
    Neville Longbottom.
    
    [VOLDEMORT'S FOLLOWERS
    LAUGHING]
    
    Well, Neville, I'm sure we can
    find a place for you in our ranks.
    
    I'd like to say something.
    
    Well, Neville, I'm sure we'd all be fascinated
    to hear what you have to say.
    
    - It doesn't matter Harry's gone.
    - Stand down, Neville.
    
    People die every day.
    
    Friends, family.
    
    Yeah.
    
    We lost Harry tonight.
    
    But he's still with us, in here.
    
    So's Fred...
    
    ...and Remus.
    
    Tonks.
    
    All of them.
    
    They didn't die in vain.
    
    But you will.
    
    - Because you're wrong.
    - Ha-ha-ha.
    
    Harry's heart did beat for us.
    
    For all of us. This is not over!
    
    [HARRY GRUNTS]
    
    Confringo!
    
    [YELLING]
    
    BELLATRIX:
    No! No, come back!
    
    Lucius! Come back! Come back and fight!
    
    Come back!
    
    I'll lure him into the castle.
    We have to kill the snake.
    
    HERMIONE: You'll need this.
    ARTHUR: Neville!
    
    [HISSING NEARBY]
    
    [WHOOSH]
    
    [YELLS]
    
    [HISSES]
    
    Not my daughter, you bitch.
    
    LAUGHS]
    
    [VOLDEMORT YELLS]
    
    HARRY:
    You were right...
    
    ...when you told Snape
    that wand was failing you.
    
    It will always fail you.
    
    VOLDEMORT:
    I killed Snape.
    
    But what if the wand
    never belonged to Snape?
    
    What if its allegiance was always
    to someone else?
    
    Come on, Tom.
    Let's finish this the way we started it.
    
    Together.
    
    [BOTH YELLING]
    
    [YELLS]
    
    [STUDENTS CHATTERING]
    
    - Ha, ha.
    - I always figured he would be a big fellow.
    
    I couldn't find my wand.
    I haven't lost my wand in my entire life.
    
    It was lost in the folds of my gowns.
    
    I managed to find it
    and I dispatched a few of them ...
    
    HAGRID:
    Harry.
    
    [HAGRID CHUCKLES]
    
    HERMIONE: Why didn't it work for him,
    the Elder Wand?
    
    It answered to somebody else.
    
    When he killed Snape,
    he thought the wand would become his.
    
    But the thing is,
    the wand never belonged to Snape.
    
    It was Draco who disarmed Dumbledore
    that night in the astronomy tower.
    
    From that moment on,
    the wand answered to him.
    
    Until...
    
    ...the other night
    when I disarmed Draco at Malfoy Manor.
    
    So that means ...
    
    it's mine.
    
    RON:
    What should we do with it?
    
    We?
    
    I'm just saying, that's the Elder Wand,
    the most powerful wand in the world.
    
    With that, we'd be invincible.
    
    Together.
    
    [WOMEN LAUGH]
    
    FATHER:
    Look after each other.
    
    - Bag?
    - Yeah.
    
    Jumper?
    
    I'll miss you.
    
    RON:
    Here they come.
    
    Dad, what if I am put in Slytherin?
    
    Albus Severus Potter...
    
    ...you were named after two headmasters
    of Hogwarts.
    
    One of them was e Slytherin...
    
    ...and he was the bravest man
    I've ever known.
    
    But just say that I am.
    
    Then Slytherin House will have gained
    a wonderful young wizard.
    
    But, listen, if it really means that much
    to you, you can choose Gryffindor.
    
    The Sorting Hat
    takes your choice into account.
    
    - Really?
    - Really.
    
    [WHISTLE BLOWS]
    
    GIRL: Bye, Mum.
    CONDUCTOR: All aboard.
    
    Ready?
    
    Ready.
    
    BOY:
    Come on, Jay, get a move on.
    
    JAMES:
    Come on.
    
    [FROG CROAKING]
    
    [PEOPLE CHATTERING]
    
    [English - US - SDH]";
}


$processor = new Processor($HP5);
$words = $processor->getWords();
$learnedWords = $processor->getLearnedWords();
$HP5NLW = array_diff($words, $learnedWords);
/*$processor = new Processor($HP6);
$words = $processor->getWords();
$learnedWords = $processor->getLearnedWords();
$HP6NLW = array_diff($words, $learnedWords);
$processor = new Processor($HP7);
$words = $processor->getWords();
$learnedWords = $processor->getLearnedWords();
$HP7NLW = array_diff($words, $learnedWords);
$processor = new Processor($HP8);
$words = $processor->getWords();
$learnedWords = $processor->getLearnedWords();
$HP8NLW = array_diff($words, $learnedWords);*/

$statistic = [];

foreach ($HP5NLW as $word)
{
    $word = "$word";
    if (isset($statistic[$word]))
    {
        $statistic[$word] += 1;
    }else
    {
        $statistic[$word] = 1;
    }
}
/*foreach ($HP6NLW as $word)
{
    $word = "$word";
    if (isset($statistic[$word]))
    {
        $statistic[$word] += 1;
    }else
    {
        $statistic[$word] = 1;
    }
}
foreach ($HP7NLW as $word)
{
    $word = "$word";
    if (isset($statistic[$word]))
    {
        $statistic[$word] += 1;
    }else
    {
        $statistic[$word] = 1;
    }
}
foreach ($HP8NLW as $word)
{
    $word = "$word";
    if (isset($statistic[$word]))
    {
        $statistic[$word] += 1;
    }else
    {
        $statistic[$word] = 1;
    }
}*/

$repeats = [];
foreach ($statistic as $value)
{
    if (isset($repeats["$value"]))
    {
        $repeats["$value"] += 1;
    }else
    {
        $repeats["$value"] = 1;
    }
}
krsort($repeats);

echo 'Words: '.count($statistic).PHP_EOL;
foreach ($repeats as $repeat => $sumWordsWithThisRepeat) {
    echo $sumWordsWithThisRepeat.' words with repeat '.$repeat.PHP_EOL;
}

arsort($statistic);
print_r($statistic);