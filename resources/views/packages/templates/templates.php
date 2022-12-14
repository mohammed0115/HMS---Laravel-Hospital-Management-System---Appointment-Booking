<script id="packagesReportActionTemplate" type="text/x-jsrender">
   <a title="<?php echo __('messages.common.edit'); ?>" class="btn action-btn btn-success btn-sm" href="{{:url}}">
            <i class="fa fa-edit action-icon"></i>
   </a>
   <a title="<?php echo __('messages.common.delete'); ?>" class="btn action-btn btn-danger btn-sm delete-btn" data-id="{{:id}}">
            <i class="fa fa-trash action-icon"></i>
   </a>



</script>
<script id="packageServiceTemplate" type="text/x-jsrender">
<tr>
    <td class="text-center item-number">1</td>
    <td class="table__item-desc">
        <select class="form-select serviceId" name="service_id[]" placeholder="<?php echo __('messages.package.select_service'); ?>" id="enquiry-medicine-id_{{:uniqueId}}" data-id="{{:uniqueId}}" required>
            <option selected="selected" value=0">Select Service</option>
            {{for services}}
                <option value="{{:key}}">{{:value}}</option>
            {{/for}}
        </select>
    </td>
    <td class="table__qty">
        <input class="form-control qty" required="" name="quantity[]" type="number">
    </td>
    <td>
        <input class="form-control price-input price" required="" name="rate[]" type="text">
    </td>
    <td class="amount text-right item-total">
    </td>
    <td class="text-center">
    <a href="javascript:void(0)" title="{{__('messages.common.delete')}}"
                               class="delete-service-package-item btn px-1 text-danger fs-3 pe-0">
                                <i class="fa-solid fa-trash"></i>
                            </a>
    </td>
</tr>
</script>
