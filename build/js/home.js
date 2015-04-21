$(function(){
    $('#social-stream').dcSocialStream({
        feeds: {
            twitter: {
                id: '#jclawcpa, JC_LawCPA',
                retweets: true,
                thumb: true,
                images:'small'
            },
            facebook: {
                id: '1394483740809502'
            },
            youtube: {
                id: 'UC2A6gNuULMFPd107sGowphg',
                feed:'uploads,newsubscriptionvideos'
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
        limit: 1,
        transition: '0.3s',
        iconPath: 'img/dcsns-dark/',
        imagePath: 'img/dcsns-dark/'
    });

});
