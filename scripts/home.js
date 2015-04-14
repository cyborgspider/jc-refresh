$(function(){
    $('#social-stream').dcSocialStream({
        feeds: {
            twitter: {
                id: '#jclawcpa, JC_LawCPA',
                retweets: true,
                thumb: true
            },
            facebook: {
                id: '1595731843999687'
            },
            youtube: {
                id: 'id'
            }
        },
        rotate: {
            delay: 0
        },
        twitterId: 'JC_LawCPA',
        control: false,
        filter: false,
        wall: true,
        cache: false,
        max: 'limit',
        external:true,
        order: 'random',
        limit: 2,
        transition: '0.3s',
        iconPath: 'img/dcsns-dark/',
        imagePath: 'img/dcsns-dark/'
    });

});
