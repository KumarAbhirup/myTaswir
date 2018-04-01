var $pictureId = 0;
$('.like').on('click', function(event){

  event.preventDefault();
  pictureId = event.target.parentNode.parentNode.dataset['picture_id'];
  var isLike = event.target.previousElementSibling == null;

  $.ajax({
    method: 'POST',
    url: urlLike,
    data: {
      isLike: isLike,
      pictureId: pictureId,
      _token: token
    }
  })
  .done(function(){
    event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You liked this Taswir' : 'Like' : event.target.innerText == 'Dislike' ? 'You disliked this Taswir' : 'Dislike';
    if(isLike){
      event.target.previousElementSibling = 'Dislike';
    } else{
      event.target.previousElementSibling = 'Like';
    }
  });

});
