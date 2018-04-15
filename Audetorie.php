<div id="audet" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        <h4 class="modal-title">Аудеторія</h4>
      </div>
        
      <div class="modal-body">
           <form class="form-group">
 <input type="text" id="ID" hidden/>
     <label>Номер</label>
         <input type="number"  min="0" id="Nomer">
     
     
       <label>К-сть місць</label>
         <input type="number"  min="0" id="Rozmir">
         </form>
      </div>
   
       <div class="modal-footer">
        <button type="button" class="btn btn-default" onclick="Send()">Send</button>
        <button type="button" class="btn btn-default" data-dismiss="close">Close</button>
      </div>
    </div>

  </div>
</div>


<script>

    $(function()
    {
      $('#audet').on('show.bs.modal', function(event) 
      {
        var button = $(event.relatedTarget);
        
        var ID = button.data('id');
        var Nomer = button.data('nomer');
        var Rozmir = button.data('rozmir');
       
        
        $("#ID").val(ID);
        $("#Nomer").val(Nomer);
        $("#Rozmir").val(Rozmir);
        
        
      });
    });

    function Send()
    {
      if($("#ID").val() == "")
      {
        var Nomer = $( "#Nomer" ).val();
        var Rozmir = $( "#Rozmir" ).val();
          $.post( "/actions/create.php", { Nomer: Nomer, Rozmir: Rozmir },
            function(result)
            {
              $("#myStudents").append("<tr><td >" + Nomer + "</td><td >" + Rozmir + "</td></tr>");
            });
      }
      else
      {
        var ID = $("#ID").val();
        var Nomer = $( "#Nomer" ).val();
        var Rozmir = $( "#Rozmir" ).val();
        $.post( "/actions/edit.php", { ID: ID, Nomer: Nomer, Rozmir: Rozmir },
            function(result)
            {
              $("#myStudents").append("<tr><td >" + Nomer + "</td><td '>" + Rozmir + "</td></tr>");
            });
           
      }
      $('#audet').modal('hide');
    }
    
    
    function Delete(ID)
    {
        $.post( "/actions/delete.php", { ID: ID },
          function(result)
          {
            $("#student_"+ID).remove();
          });
    }
    
    
</script>


</body>
</html>