//
//
//var video = document.getElementById('ignition_video');
////video.src = 'http://www.smartburn.com/devel/plasma_ignition1.mp4';
//video.src = 'http://www.smartburn.com/devel/plasma_ignition_small.mp4';
//
////video.src = 'assets/videos/plasma_ignition.mp4'; //x
//video.load();
//
//video.addEventListener('loadeddata', function() {
//    var figure = $(".hover_play");
//    var vid = figure.find("video");
//
//    figure.removeClass('hidden');
//
//    [].forEach.call(figure, function (item,index) {
//        item.addEventListener('mouseover', hoverVideo.bind(item,index), false);
//        item.addEventListener('mouseout', hideVideo.bind(item,index), false);
//    });
//
//    function hoverVideo(index, e) {
//        vid[index].play();
//    }
//
//    function hideVideo(index, e) {
//        vid[index].pause();
//    }
//
//
//}, false);
//
//




var figure = $(".hover_play");
var vid = figure.find("video");

figure.removeClass('hidden');

[].forEach.call(figure, function (item,index) {
    item.addEventListener('mouseover', hoverVideo.bind(item,index), false);
    item.addEventListener('mouseout', hideVideo.bind(item,index), false);
});

function hoverVideo(index, e) {
    vid[index].play();
}

function hideVideo(index, e) {
    vid[index].pause();
}
