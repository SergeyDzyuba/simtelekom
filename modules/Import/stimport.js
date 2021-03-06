var row_index = 0;
var alt_index = 0;
var related_modules_arr;

$( document ).ready(function() {
    
    get_modules($('#modules_main').val());
    $('.td_csv_modules').live('change',function(){
        manage_order();
    });
    
    $('.string_func').live('change',function(){
        //alert($(this).val());
        var data_num = $(this).data('num');
        if($(this).val() == 'concat')
        {
            $('#string_func_div'+data_num).html('<input type="text" class="first_div"><input type="text" class="second_div">');
        }
        else if($(this).val() == 'no_func')
        {
            $('#string_func_div'+data_num).html('');
        }
        else
        {
            $('#string_func_div'+data_num).html('<input type="text">');
        }
    });
    
    form_alt();
    
    $('#templates').live('change',function(){
        var template_id = $(this).val();
        if(template_id.length > 0)
            get_template(template_id);
        
    });
    
    //invecto_settings();
});

function invecto_settings()
{
        
    $('#modules_main').val('Buildings');
    var res_m = get_modules('Buildings');
    
    if(res_m)
    {
        $('#b-popup').show();
        $('#import_type').val('mixed');
        
        $('#td_csv_modules0').val('Realty');
        var res_sm = get_submodules('Realty', 0);
        
        $('#td_csv_fields0').val('activity_status');
        
        $('#td_csv_modules1').val('Buildings');
        var res_sm = get_submodules('Buildings', 1);
        
        $('#td_csv_fields1').val('name');
        $('#td_csv_search1').attr("checked", "checked");
        
        $('#td_csv_modules2').val('Houses');
        var res_sm = get_submodules('Houses', 2);
        
        $('#td_csv_fields2').val('name');
        $('#td_csv_search2').attr("checked", "checked");
        
        $('#td_csv_modules3').val('Sections');
        var res_sm = get_submodules('Sections', 3);
        
        $('#td_csv_fields3').val('name');
        $('#td_csv_search3').attr("checked", "checked");
        
        $('#td_csv_modules4').val('Realty');
        var res_sm = get_submodules('Realty', 4);
        
        $('#td_csv_fields4').val('floor_list_c');
        $('#td_csv_search4').attr("checked", "checked");
        
        $('#td_csv_modules5').val('Realty');
        var res_sm = get_submodules('Realty', 5);
        
        $('#td_csv_fields5').val('number_site_c');
        $('#td_csv_search5').attr("checked", "checked");
        
        $('#td_csv_modules6').val('Realty');
        var res_sm = get_submodules('Realty', 6);
        
        $('#td_csv_fields6').val('rooms_quantity');

        $('#td_csv_modules7').val('Realty');
        var res_sm = get_submodules('Realty', 7);
        
        $('#td_csv_fields7').val('type_of_realty');
        
        $('#td_csv_modules8').val('Realty');
        var res_sm = get_submodules('Realty', 8);
        
        $('#td_csv_fields8').val('number_case_c');
        $('#td_csv_search8').attr("checked", "checked");
        
        $('#td_csv_modules9').val('Realty');
        var res_sm = get_submodules('Realty', 9);
        
        $('#td_csv_fields9').val('square');
        
        $('#td_csv_modules10').val('Realty');
        var res_sm = get_submodules('Realty', 10);
        
        $('#td_csv_fields10').val('totalcost');
        
        $('#td_csv_modules11').val('Realty');
        var res_sm = get_submodules('Realty', 11);
        
        $('#td_csv_fields11').val('cost');
        
        $('#td_csv_modules12').val('Realty');
        var res_sm = get_submodules('Realty', 12);
        
        $('#td_csv_fields12').val('state_of_object');
        
        $('#td_csv_modules13').val('Realty');
        var res_sm = get_submodules('Realty', 13);
        
        $('#td_csv_fields13').val('name');

        manage_order();
        
        $('#modules_select1').val('Houses');
        $('#modules_select2').val('Sections');
        $('#modules_select3').val('Realty');
        
        add_row();
        $('#rowselect0').val('Sections');
        change_rel(0);
        $('#rowrelationships0').val('Houses');
        
        add_row();
        $('#rowselect1').val('Realty');
        change_rel(1);
        $('#rowrelationships1').val('Houses');
        
        add_row();
        $('#rowselect2').val('Realty');
        change_rel(2);
        $('#rowrelationships2').val('Sections');
        $('#b-popup').hide();
    }
}

function manage_order()
{
    var all_selected = false;
    $('.td_csv_modules').each(function(indx, element){
        if($(element).val() !== '')
        {
            all_selected = true;
        }
        else
        {
            all_selected = false;
        }
    });
    
    if(all_selected)
    {
        form_order_div();
        form_relationships();
    }
    else
    {
        $('#module_order').html('');
        $('#additional_relationships').html('');
    }
}

function form_relationships()
{
    rel_html = '<h3>Дополнительные связи</h3><br/><table id="relate_table" class="table_csv" >\n\
<tr>\n\
<td class="td_csv">Модуль</td>\n\
<td class="td_csv">Связь</td>\n\
<td class="td_csv"><input type="button" id="add_button" value="Добавить связь" onclick="add_row()"></td>\n\
</tr></table><br/><br/>';
    $('#additional_relationships').html(rel_html);
}

function form_alt()
{
    rel_html = '<h3>Альтернативные связи</h3><br/><table id="alt_table" class="table_csv" >\n\
<tr>\n\
<td class="td_csv">Модуль</td>\n\
<td class="td_csv">Связь</td>\n\
<td class="td_csv"><input type="button" id="add_alt_rel" value="Добавить связь" onclick="add_alt()"></td>\n\
<td class="td_csv">Включить в список модулей</td>\n\
</tr></table><br/><br/>';
    $('#alternative_relationships').html(rel_html);
}

function add_row()
{ 
    var related_modules_list = form_rel_select('string');
    row_html = '<tr class="row_add_rel" id="row'+	window.row_index+'"><td><select id="rowselect'+	window.row_index+'" onchange="change_rel('+	window.row_index+')">'+related_modules_list+'</td>\n\
                <td><select id="rowrelationships'+	window.row_index+'"></select></td>\n\
                <td><input type="button" id="del_button" value="Убрать связь" onclick="del_row('+	window.row_index+')"></td>\n\
                </tr>';
    $('#relate_table').append(row_html);
    add_relationships($('#rowselect'+	window.row_index+' :selected').data('modname'), 'rowrelationships'+	window.row_index);
    window.row_index++;
}

function add_alt()
{ 
    var related_modules_list = form_rel_select('string');
    row_html = '<tr class="row_add_rel" id="alt_row'+	window.alt_index+'"><td><select id="altselect'+	window.alt_index+'" onchange="change_alt('+	window.alt_index+')">'+related_modules_list+'</td>\n\
                <td><select id="alt_rowrelationships'+	window.alt_index+'"></select></td>\n\
                <td><input type="button" id="alt_del_button" value="Убрать связь" onclick="del_alt('+	window.alt_index+')"></td>\n\\n\
                <td><input type="button" id="alt_inc_button" value="Включить" onclick="inc_alt('+	window.alt_index+')"></td>\n\
                </tr>';
    $('#alt_table').append(row_html);
    alt_relationships($('#altselect'+	window.alt_index+' :selected').data('modname'), 'alt_rowrelationships'+	window.alt_index);
    window.alt_index++;
}

function inc_alt(row_ind)
{
    var alt_mod_name = $('#altselect'+row_ind).val();
    var alt_mod_lbl = $('#altselect'+row_ind+' :selected').html();
    var alt_rel_name = $('#alt_rowrelationships'+row_ind).val();
    var alt_rel_lbl = $('#alt_rowrelationships'+row_ind+' :selected').html();
    var alt_rel = $('#alt_rowrelationships'+row_ind+' :selected').data('relname');
    
    $('.td_csv_modules').each(function( index ) 
    {
        var already_added = false;
        $( this ).children().each(function( ind ){
            if( $( this ).val() == alt_rel_name )
            {
                already_added = true;
            }
        });
        
        if (!already_added) 
        {
            var app_html = "<option value='"+alt_rel_name+"' data-key='"+alt_rel+"' data-child='"+alt_mod_name+"' data-parent='self'>"+alt_rel_lbl+" ("+alt_mod_lbl+")</option>";
            $(this).append(app_html);
        };
    });
    $('#altselect'+row_ind).prop('disabled', true);
    $('#alt_rowrelationships'+row_ind).prop('disabled', true);
    alert('Связь добавлена!');
}

function del_row(row_ind)
{
    $("#row"+row_ind).remove();
}

function del_alt(row_ind)//TODO! Если убрали связь - убираем её и из списка
{
    var alt_rel_name = $('#alt_rowrelationships'+row_ind).val();
    $(".td_csv_modules option[value='"+alt_rel_name+"']").remove();
    $("#alt_row"+row_ind).remove();
}

function change_rel(row_i)
{
    mod_name = $('#rowselect'+row_i+' :selected').data('modname');
    $('#rowrelationships'+row_i).html();
    add_relationships($('#rowselect'+	row_i +' :selected').data('modname'), 'rowrelationships'+	row_i);
}

function change_alt(row_i)
{
    mod_name = $('#altselect'+row_i+' :selected').data('modname');
    $('#alt_rowrelationships'+row_i).html();
    alt_relationships($('#altselect'+	row_i +' :selected').data('modname'), 'alt_rowrelationships'+	row_i);
}

function add_relationships(module,id)
{
    var related_modules_array = form_rel_select('array');
    related_arr = window.related_modules_arr;
    $('#'+id).html('');
    for(var obj in related_arr[module]) 
    {
        //related_arr[module][obj].module;
        console.log(related_arr[module][obj].module);
        if(related_arr[module][obj].parent == 'parent')
        {
            for(var objm in related_arr[module][obj].modules) 
            {
                console.log(objm);
                if($.inArray(related_arr[module][obj].modules[objm].modname, related_modules_array) != '-1')
                {
                    $('#'+id).append('<option data-relname="'+related_arr[module][obj].rel+'" data-module="'+related_arr[module][obj].modules[objm].modname+'" value="'+related_arr[module][obj].modules[objm].modname+'">'+related_arr[module][obj].modules[objm].label+'</option>');
                }
            }
        }
        else
        {
            if($.inArray(related_arr[module][obj].module, related_modules_array) != '-1')
            {
                $('#'+id).append('<option data-relname="'+related_arr[module][obj].rel+'" data-module="'+related_arr[module][obj].module+'" value="'+related_arr[module][obj].module+'">'+related_arr[module][obj].label+'</option>');
            }
        }
        
        
    }
    
    //$('#'+id).append('<option>123</option>');
}

function alt_relationships(module,id)
{
    var ret_data;
    var html_options_row = '';
    $.ajax({
            url: 'index.php?module=Import&action=GetModules&mode=alt&modules='+module+'&to_pdf=true',
            dataType: 'json',
            type: 'post',
            async: false,
            success: function(data)
            {
                console.log(data);
                //$('#' + id).html(data.main);
                ret_data = data;
            },
            error: function(){alert('Ошибка приема данных ajax в get_submodules');}
        });
        
    for(var obj in ret_data) 
    {
        html_options_row += '<option data-modname="'+ret_data[obj].module+'" data-relname="'+ret_data[obj].id_name+'" value="'+ret_data[obj].module+'">';
        html_options_row += ret_data[obj].label;
        html_options_row += '</option>';
    }
    $('#'+id).html(html_options_row);
}

function form_rel_select(return_type)
{
    modules = [];
    modules_rus = [];
    $('.td_csv_modules').each(function(indx, element){
        curr_mod = $(element).val();
        if($.inArray(curr_mod, modules) == '-1'/* && curr_mod != $('#modules_main').val()*/)
        {
            modules.push(curr_mod);
            mod_rus = $('#td_csv_modules'+indx+' option:selected').html();
            modules_rus.push(mod_rus);
        }
    });
    html_options_row = '';
    if(return_type == 'string')
    {
        for(i=0;i<modules.length;i++)
        {
            html_options_row += '<option data-modname="'+modules[i]+'" value="'+modules[i]+'">';
            html_options_row += modules_rus[i];
            html_options_row += '</option>';
        }
        html_options_row += '</select>';
        return html_options_row;
    }
    else
    {
        return modules;
    }
    
}

function form_order_div()
{
    main_module = $('#modules_main').val();
    main_rus = $('#modules_main option:selected').html();
    modules = [main_module];
    modules_rus = [main_rus];
    $('.td_csv_modules').each(function(indx, element){
        curr_mod = $(element).val();
        if($.inArray(curr_mod, modules) == '-1')
        {
            modules.push(curr_mod);
            mod_rus = $('#td_csv_modules'+indx+' option:selected').html();
            modules_rus.push(mod_rus);
        }
    });
    var html_options = '';
    for(i=0;i<modules.length;i++)
    {
        
        if(modules[i] != main_module)
        {
            html_options += '<option data-modname="'+modules[i]+'" value="'+modules[i]+'">';
            html_options += modules_rus[i];
            html_options += '</option>';
        }
        else
        {
            html_options += '<option>';
            html_options += '</option>';
        }
        
    }
    html_options += '</select>';
    
    var html_string = '<table class="table_csv" >\n\
<tr>\n\
<td class="td_csv">Порядок загрузки</td>\n\
<td class="td_csv">Модуль</td>\n\
</tr>';
    for(i=0;i<modules.length;i++)
    {
        html_string += '<tr>\n\
                            <td class="td_csv">\n\
                            '+(i+1)+'\n\
                            </td>\n\
                            <td class="td_csv">\n\
';
        if(modules[i] === main_module)
        {
            //html_string += '<span id="main_module_span" class="modules_select" data-num="'+i+'" data-modname="'+modules[i]+'">'+modules_rus[i]+'</span>';
            html_string += '<select id="modules_select'+i+'" class="modules_select" data-num="'+i+'"  >\n\
                            <option data-modname="'+modules[i]+'">' + $('#modules_main :selected').html() + '</option>\n\
                            </select>';
        }
        else
        {
            mod_name = 
            html_string += '<select id="modules_select'+i+'" class="modules_select" data-num="'+i+'" >'+html_options;
        }
        html_string += '    </td>\n\
                        </tr>';
    }
    html_string += '</table><br/><br/>';
    $('#module_order').html(html_string);
    console.log(modules);
}

function get_submodules(module, n)
{
    if (module != '')
    {
        $.ajax({
            url: 'index.php?module=Import&action=GetModules&mode=sub&modules='+module+'&to_pdf=true',
            dataType: 'json',
            type: 'post',
            async: false,
            success: function(data)
            {
                $('#td_csv_fields' + n).html(data);
            },
            error: function(){alert('Ошибка приема данных ajax в get_submodules');}
        });
        return true;
    } 
    else 
    {
        $('#td_csv_fields' + n).html('<option value=""></option>');
        return false;
    }
};
	
function get_modules(module)
{
    if (module != '')
    {
        $.ajax({
            url: 'index.php?module=Import&action=GetModules&mode=rel&modules='+module+'&to_pdf=true',
            dataType: 'json',
            type: 'post',
            async: false,
            success: function(data)
            {	
                var tmp = '';
                console.log(data);
                tmp = '<option value=""></option><option value="' + $('#modules_main').val() + '" data-key="id">' + $('#modules_main option:selected').text() + '</option>';
                $('[id^=td_csv_modules]').html(tmp + data.main);
                window.related_modules_arr = data.additional;
            },
            error: function(){alert('Ошибка приема данных ajax в get_modules');}
        });
        return true;
    } 
    else 
    {
        $('.td_csv_modules').html('<option value=""></option>');
        $('.td_csv_fields').html('<option value=""></option>');
        return false;
    };
};
	
function do_import(file)
{
    modules_select_bool = true;
    $('.modules_select').each(function( index ) 
    {
        selected_val = $('#modules_select'+index).val();
        if(selected_val.length < 1)
        {
            modules_select_bool = false;
        }
    });
    if (/*$('#modules_main').val().length == 0*/ modules_select_bool === false)
    {
        alert('Выберите порядок загрузки модулей!');
    }
    else
    {
        var map = new Array();
        $('.td_csv_modules').each(function( index ) 
        {
            if (($( this ).val() != '') && ($('#td_csv_fields'+index).val() != '') && ($('#td_csv_modules'+index).val() != '')) 
            {
                var str_func = $('#string_func'+index).val();
                var str_func_val = '';
                if(str_func == 'concat')
                {
                    var first_child = $('#string_func_div'+index).find(".first_div").val();
                    var second_child = $('#string_func_div'+index).find(".second_div").val();
                    str_func_val = first_child+'^|^'+second_child;
                }
                else if(str_func != 'no_func')
                {
                    str_func_val = $('#string_func_div'+index).find("input").val();
                }
                else
                {
                    //ничего
                }
                
                map[index] = {
                    index: index,
                    modulename: $(this).val(),
                    fieldname: $('#td_csv_fields'+index).val(),
                    uploadbool: ($('#td_csv_upload'+index).attr('checked'))?'true':'false',
                    searchbool: ($('#td_csv_search'+index).attr('checked'))?'true':'false',
                    relfield: $('#td_csv_modules'+index+' :selected').attr('data-key'),
                    relmodule: $('#td_csv_modules'+index+' :selected').attr('data-parent'),
                    relchild: $('#td_csv_modules'+index+' :selected').attr('data-child'),
                    func: $('#search_func'+index).val(),
                    str_func: str_func,
                    str_func_val: str_func_val
                };
            };
        });
        map_order = new Array();

        $('.modules_select').each(function( index ) 
        {
            if (($( this ).val() != '') && ($('#modules_select'+index).val() != '') 
             /*&& ($('.td_csv_fields'+index).val().indexOf('email') == -1)*/) 
            {
                map_order[index] = {
                    index: index,
                    modulenamer: $(this).val(),
                    modulename: $('#modules_select'+index+' :selected').attr('data-modname')
                };
            };
        });
        
        
        add_rel = new Array();
        $('.row_add_rel').each(function( index, element ) 
        {
            id_row = $(element).attr('id');
            sub_id = id_row.substr(3);
            
                add_rel[index] = {
                    module: $('#rowselect'+sub_id+' :selected').attr('data-modname'),
                    modulerel: $('#rowrelationships'+sub_id+' :selected').attr('data-module'),
                    rel: $('#rowrelationships'+sub_id+' :selected').attr('data-relname')
                };
        });
        
        console.log( 'map = ' + map );
        //var data = [map, 0, ];
        var delimiter = $('#delimiter').val();
        var module = $('#modules_main').val();
        var encode = $('#encode').val();
        $('#b-popup').show();
        
        $.ajax({
            url: 'index.php?module=Import&action=DoImport&to_pdf=true',
            dataType: 'json',
            data: {
                    'map': map,
                    'file': file,
                    'modu': module, 
                    'delimiter': delimiter,
                    'encode': encode,
                    'type': $('#import_type').val(),
                    'map_order': map_order,
                    'add_rel' : add_rel
                },
            type: 'post',
            success: function(data)
            {	
                $('#b-popup').hide();
                var decoded = JSON.stringify(data);
                $('#imported').html(decoded);
                $("#submit_form").submit();
            },
            error: function(){
                $('#b-popup').hide();
                alert('Ошибка приема данных ajax');
            }
        });
    };
};
  
function get_template(record)
{
    $.ajax({
        url: 'index.php?module=ImportTemplates&action=utils&func=load&rec='+record+'&to_pdf=true',
        dataType: 'json',
        type: 'post',
        async: false,
        success: function(data)
        {
            //console.log(data);
            //TODO 
            /*
             * 1) Проверяем количество столбцов в шаблоне и в файле
             * 2) Если в файле столбцов больше - оставшиеся заполняем модулем по умолчанию
             * 3) Если меньше - выводим ошибку
             * 4) Заполняем соответственные параметры
             */
            
            //1) Проверяем количество столбцов в шаблоне и в файле
            var data_map_length = data.map.length;
            var csv_head_length = $('.csv_head').length;
            
            //3) Если меньше - выводим ошибку
            if(csv_head_length < data_map_length)
            {
                alert('Ошибка! Шаблон не подходит')
            }
            //2) Если в файле столбцов больше - оставшиеся заполняем модулем по умолчанию
            else
            {
                use_template(data);
            } 
        },
        error: function(){alert('Ошибка приема данных ajax в get_submodules');}
    });
    return true;

};

function use_template(data)
{
    $('#b-popup').show();
    
    $('#modules_main').val(data.modul);
    var res_m = get_modules(data.modul);
    if(res_m)
    {
        delete_all_alt();
        
        
        $('#import_type').val(data.type);
        
        var i = 0
        for (; i < data.map.length; i++) 
        {
            $('#td_csv_modules'+i).val(data.map[i].module_name);
            var res_sm = get_submodules(data.map[i].module_name, i);

            $('#td_csv_fields'+i).val(data.map[i].field_name);
            
            if(data.map[i].upload === 'true')
                $('#td_csv_upload'+i).attr("checked", "checked");
            else
                $('#td_csv_upload'+i).removeAttr("checked");
            
            if(data.map[i].search === 'true')
                $('#td_csv_search'+i).attr("checked", "checked");
            else
                $('#td_csv_search'+i).removeAttr("checked");
            
            $('#search_func'+i).val(data.map[i].search_func);
            $('#string_func'+i).val(data.map[i].string_func);
            
            if(data.map[i].string_func == 'concat')
            {
                var str_func_val_arr = data.map[i].str_func_val.split('^|^');
                $('#string_func_div'+i).html('<input type="text" class="first_div" value="'+str_func_val_arr[0]+'"><input type="text" class="second_div" value="'+str_func_val_arr[1]+'">');
            }
            else if(data.map[i].string_func == 'no_func')
            {
                $('#string_func_div'+i).html('');
            }
            else
            {
                $('#string_func_div'+i).html('<input type="text" value="'+data.map[i].str_func_val+'">');
            }
        }
        if(i < $('.csv_head').length)
        {
            for (var j = i; j < $('.csv_head').length; j++) 
            {
                $('#td_csv_modules'+j).val(data.modul);
                var res_sm = get_submodules(data.modul, j);
            }
        }
        
        manage_order();
        
        for (var y = 1; y < data.map_order.length; y++) 
        {
            $('#modules_select'+y).val(data.map_order[y].modulename);
        }
        
        if(data.add_rel !== null)
        {
            for (var z = 0; z < data.add_rel.length; z++) 
            {
                add_row();
                $('#rowselect'+z).val(data.add_rel[z].module);
                change_rel(z);
                $('#rowrelationships'+z).val(data.add_rel[z].modulerel);
            }
        }
        
        if(data.alt_row !== null)
        {
            for (var z = 0; z < data.alt_row.length; z++) 
            {
                add_alt();
                $("#altselect"+z+" [modname='"+data.alt_row[z].module+"']").attr("selected", "selected");
                change_alt(z);
                $("#alt_rowrelationships"+z+" [module='"+data.alt_row[z].modulerel+"'][relname='"+data.alt_row[z].rel+"']").attr("selected", "selected");
                inc_alt(z);
            }
        }
        

        
        $('#b-popup').hide();
    }
    
}

function save_template()
{
    //TODO
    /*
     * 1) Проверить, все ли поля заполнены (столбцы, дополнительные настройки)
     * 2) Если шаблон не выбран - просто выводим поле для ввода названия и сохраняем
     * 3) Если выбран - спрашиваем, переписать?
     * 4) Если переписать - переписываем
     * 5) Если нет - выводим поле для ввода названия
     * 6) Собираем все данные в json массив
     * 7) Сохраняем
     */
    
    // 1
    var valid_template = true;
    
    var modules_main_t = $('#modules_main').val();
    
    var import_type_t = $('#import_type').val();
    
    var template_params = new Array();
    $('.td_csv_modules').each(function( index ) 
    {
        if($(this).val() === '' || $('#td_csv_fields'+index+' :selected').val() === '')
        {
            valid_template = false;
            return false;
        }
        
        if($('#string_func'+index+' :selected').val() === 'concat')
        {
            var first_child = $('#string_func_div'+index).find(".first_div").val();
            var second_child = $('#string_func_div'+index).find(".second_div").val();
            var str_func_val = first_child+'^|^'+second_child;
        }
        else if($('#string_func'+index+' :selected').val() === 'no_func')
        {
            var str_func_val = '';
        }
        else
        {
            var str_func_val = $('#string_func_div'+index).find("input").val();
        }
        
        template_params[index] = {
            index: index,
            module_name: $(this).val(),
            field_name: $('#td_csv_fields'+index+' :selected').val(),
            upload : ($('#td_csv_upload'+index).attr('checked'))?'true':'false',
            search : ($('#td_csv_search'+index).attr('checked'))?'true':'false',
            search_func : $('#search_func'+index+' :selected').val(),
            string_func : $('#string_func'+index+' :selected').val(),
            str_func_val : str_func_val,
        }
    });
          
    var modules_select = new Array();

    $('.modules_select').each(function( index ) 
    {
        if (($( this ).val() !== '') && ($('#modules_select'+index).val() !== '')) 
        {
            modules_select[index] = {
                index: index,
                modulename: $('#modules_select'+index+' :selected').attr('data-modname')
            };
        }
        else
        {
            valid_template = false;
            return false;
        }
    });

    var row_add_rel = new Array();
    $('.row_add_rel').each(function( index, element ) 
    {
        id_row = $(element).attr('id');
        sub_id = id_row.substr(3);

        row_add_rel[index] = {
            module: $('#rowselect'+sub_id+' :selected').attr('data-modname'),
            modulerel: $('#rowrelationships'+sub_id+' :selected').attr('data-module'),
            rel: $('#rowrelationships'+sub_id+' :selected').attr('data-relname')
        };
    });
    
    var alt_row = new Array();
    $('.row_add_rel').each(function( index, element ) 
    {
//        id_row = $(element).attr('id');
//        sub_id = id_row.substr(3);

        alt_row[index] = {
            module: $('#altselect'+index+' :selected').attr('data-modname'),
            modulerel: $('#alt_rowrelationships'+index+' :selected').attr('data-module'),
            rel: $('#alt_rowrelationships'+index+' :selected').attr('data-relname')
        };
    });

    var delimiter = $('#delimiter').val();
    var encode = $('#encode').val();
    $('#b-popup').show();
    
    if(valid_template === true)
    {
        if($('#templates').val() === '')
        {
            var t_name = prompt('Введите название шаблона', '');
            if(t_name === '')
            {
                alert('Вы ввели пустое название!');
            }
            else
            {
                save_template_ajax(template_params, modules_main_t, delimiter, encode, import_type_t, modules_select, row_add_rel, alt_row,true,'',t_name);
            }
        }
        else
        {
            var rewrite = confirm("Перезаписать шаблон?");
            if(rewrite)
            {
                var t_id = $('#templates').val();
                var t_name = $('#templates :selected').html();
                save_template_ajax(template_params, modules_main_t, delimiter, encode, import_type_t, modules_select, row_add_rel, alt_row,false,t_id,t_name)
            }
            else
            {
                var t_name = prompt('Введите название шаблона', '');
                if(t_name === '')
                {
                    alert('Вы ввели пустое название!');
                }
                else
                {
                    save_template_ajax(template_params, modules_main_t, delimiter, encode, import_type_t, modules_select, row_add_rel, alt_row,true,'',t_name);
                }
            }
        }   
    }
    else
    {
        $('#b-popup').hide();
        alert('Неправильно введенные данные!');
    }
    
};

function save_template_ajax(template_params, modules_main_t, delimiter, encode, import_type_t, modules_select, row_add_rel, alt_row,is_new,rec,t_name)
{
    $.ajax({
        url: 'index.php?module=ImportTemplates&action=utils&to_pdf=true&func=save',
        dataType: 'json',
        data: {
                'map': template_params,
                'modul': modules_main_t, 
                'delimiter': delimiter,
                'encode': encode,
                'type': import_type_t,
                'map_order': modules_select,
                'add_rel' : row_add_rel,
                'alt_row' : alt_row,
                'is_new' : is_new,
                'rec' : rec,
                't_name' : t_name
            },
        type: 'post',
        success: function(data)
        {	
            $('#b-popup').hide();
            alert('Шаблон '+data.name+' сохранен!');
            $('#templates').append("<option value='"+data.id+"'>"+data.name+"</option>");
        },
        error: function(){
            $('#b-popup').hide();
            alert('Ошибка приема данных ajax');
        }
    });
}

function delete_all_alt()
{
    $('.row_add_rel').each(function( index, element ) 
    {
        del_alt(index);
        $('#alt_row'.index).remove();
    });
    
}