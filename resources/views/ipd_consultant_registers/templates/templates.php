<script id="ipdConsultantRegisterActionTemplate" type="text/x-jsrender">
  <a  title="<?php echo __('messages.common.edit') ?>" data-id={{:id}}" class=""btn action-btn btn-success btn-sm edit-consultant-btn">
    <i class="fa fa-edit action-icon"></i>
</a>
<a href="javascript:void(0)" title="<?php echo __('messages.common.delete') ?>" data-id={{:id}}" class="delete-consultant-btn btn action-btn btn-danger btn-sm">
    <i class="fa fa-trash action-icon"></i>
</a>

</script>

<script id="ipdConsultantInstructionItemTemplate" type="text/x-jsrender">
    <tr>
        <td class="text-center item-number consultant-table-td">1</td>
        <td class="consultant-table-td position-relative">
            <input class="form-control appliedDate bg-white" name="applied_date[]" type="text" autocomplete="off" required>
        </td>
        <td class="consultant-table-td">
            <select class="form-select doctorId select2Selector" name="doctor_id[]" placeholder="Select Doctor" data-id="{{:uniqueId}}" required>
                <option selected="selected" value=0">Select Doctor</option>
                {{for doctors}}
                    <option value="{{:key}}">{{:value}}</option>
                {{/for}}
            </select>
        </td>
        <td class="consultant-table-td position-relative">
            <input class="form-control bg-white instructionDate" name="instruction_date[]" type="text" autocomplete="off" required>
        </td>
        <td class="consultant-table-td">
            <textarea class="form-control" name="instruction[]" onkeypress='return avoidSpace(event);' rows="1" required></textarea>
        </td>
        <td class="text-center consultant-table-td">
            <i class="fa fa-trash text-danger deleteIpdConsultantInstruction pointer"></i>
        </td>
    </tr>




</script>
