$(document).ready(function() {
  $('#knowledgeForm').submit(function(event) {
    // Kiểm tra logic xác nhận trước khi gửi form
    // Ví dụ: Kiểm tra xem các trường dữ liệu có được điền đầy đủ không
    var author = $('#author').val();
    var topic = $('#topic').val();
    var content = $('#content').val();

    if (author === '' || topic === '' || content === '') {
      alert('Vui lòng điền đầy đủ thông tin');
      event.preventDefault(); // Ngăn chặn việc gửi form
    }
  });
});
