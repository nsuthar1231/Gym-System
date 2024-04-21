<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="<?php if($page=='dashboard'){ echo 'active'; }?>"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="<?php if($page=='member'){ echo 'submenu active'; } else { echo 'submenu';}?>"> <a href="#"><i class="icon icon-group"></i> <span>Manage Workout Plan</span></a>
      <ul>
        <li><a href="members.php">List Workout Plan</a></li>
        <li><a href="member-entry.php">Workout Plan Entry </a></li>
        <li><a href="remove-member.php">Remove Workout Plan</a></li>
        <li><a href="edit-member.php">Update Workout Plan</a></li>
      </ul>
    </li>

    <li class="<?php if($page=='equipment'){ echo 'submenu active'; } else { echo 'submenu';}?>"> <a href="#"><i class="icon icon-cogs"></i> <span>Manage Diet  Plan</span> </a>
      <ul>
        <li><a href="equipment.php">List Diet Plan</a></li>
        <li><a href="equipment-entry.php">Add Diet Plan</a></li>
        <li><a href="remove-equipment.php">Remove Diet Plan</a></li>
        <li><a href="edit-equipment.php">Update Diet Plan</a></li>
      </ul>
    </li>
    <li class="<?php if($page=='membersts'){ echo 'active'; }?>"><a href="member-status.php"><i class="icon icon-eye-open"></i> <span>Slot Booking</span></a></li>
    <li class="<?php if($page=='payment'){ echo 'active'; }?>"><a href="payment.php"><i class="icon icon-money"></i> <span>Payments</span></a></li>
    <li class="<?php if($page=='attendance'){ echo 'active'; }?>"><a href="attendance.php"><i class="icon icon-calendar"></i> <span>Manage Attendance</span></a></li>

  </ul>
</div>
<!--sidebar-menu-->