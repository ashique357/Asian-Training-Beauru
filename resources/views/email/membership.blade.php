
   <p>Hello <strong>{{$name}}</strong></p>
   <p>Hope You are doing great.</p>
   <p>Thank you for applying to Asian Training Beauru.</p>
   <p>Congratulation!! Your application has been accepted.</p>

   <h3>Name:{{$name}}</h3>
   <h5>Registration no:{{$reg}}</h5>
   <p>Email: <span>{{$email}}</span></p>
   <p>Phone:<span>{{$phone}}</span></p>
   <p>Address:<span>{{$address}}</span></p>
    @if($type ==1)
    <p>Designation:<span>{{$desg}}</span></p>
    <p>Linkedin:<span>{{$linkedin}}</span></p>
    @endif
    @if($type == 1)
    <p>Application for:<span>Individual</span></p>
    @elseif($type == 2)
    <p>Application for:<span>Training Provider</span></p>
    @else
    <p>Application for:<span>Corporate</span></p>
    @endif
    @if($type == 1)
    <p>Year of experience:<span>{{$exp}}</span></p>
    @endif
    @if($type == 2)
    <p>Year of establishment:<span>{{$exp}}</span></p>
    @endif
    @if($type ==3)
    <p>Number of Employees:<span>{{$employee}}</span></p>
    @endif
    @if(!$type ==1)
    <p>Contact Person: <span>{{$con_person}}</span></p>
    @endif
    @if($type ==2)
    <p>Web address:<span>{{$web}}</span></p>
    @endif

    <p>Stay With us.For further information contact with us <small>atb@gmail.com</small></p>