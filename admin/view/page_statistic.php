<!DOCTYPE html>
<html lang="en-US">
  <style>
    h3 {
    text-align: center;
    margin-top: 20px!important;
    font-weight: 800;

}
  </style>
<body>

  <h3>Trang Thống Kê</h3>

  <div id="piechart"></div>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script type="text/javascript">
    // Load google charts
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Hoạt Động', 'Giờ Mỗi Ngày'],
        <?php
        foreach ($tk_trangthai as $data) {
          extract($data);
          echo "['$TrangThai',$SoLuong],";
        }

        ?>
      ]);

      // Optional; add a title and set the width and height of the chart
      var options = { 'title': 'Thống Kê Trạng Thái Đơn Hàng', 'width': 550, 'height': 400 };

      // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
  </script>

</body>

</html>