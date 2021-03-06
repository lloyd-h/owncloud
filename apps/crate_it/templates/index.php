{#
  ownCloud - Cr8it App

  @author Lloyd Harischandra
  @copyright 2014 University of Western Sydney www.uws.edu.au

  This library is free software; you can redistribute it and/or
  modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
  License as published by the Free Software Foundation; either
  version 3 of the License, or any later version.

  This library is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU AFFERO GENERAL PUBLIC LICENSE for more details.

  You should have received a copy of the GNU Lesser General Public
  License along with this library.  If not, see <http://www.gnu.org/licenses/>.

#}

<div id="container" class="crateit">

  <div class="bar-actions">

    <img class="icon svg" src="/owncloud/apps/crate_it/img/milk-crate-dark.png">

    <a id="create" class="button" data-toggle="modal" data-target="#createCrateModal">
      <i class="fa fa-plus"></i>
    </a>
    <label for="crates" class="element-invisible">Crate Selector</label>
    <select id="crates">
      
      {% for crate in crates %}  
         {% if selected_crate is sameas(crate) %} 
            <option id="{{ crate }}" value="{{ crate }}" selected>
         {% else %}
            <option id="{{ crate }}" value="{{ crate }}">
         {% endif %}
         {{ crate }}
          </option>
      {% endfor %}
    </select>

    <div class="pull-right">

      <a id="publish" class="button" data-toggle="modal" data-target="#publishModal">
        <i class="fa fa-envelope"></i>
        Publish
      </a>

      <a id="check" class="button" data-toggle="modal" data-target="#checkCrateModal">
         <i class="fa fa-check-circle"></i>
         Check Crate
      </a>  
      
      <div class="btn-group">      
        <button type="button" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-download"></i>
          Download
        </button>
        <ul class="dropdown-menu">
          {% if previews == "on" %}
            <li>
              <a id="epub" class="dropdown-btn" href="crate/epub">
                <i class="fa fa-book"></i>
                 ePub
              </a>
            </li>
          {% endif %}
          <li>
            <a id="download" class="dropdown-btn">
              <i class="fa fa-archive"></i>
               Zip
            </a>
          </li>
        </ul>
      </div>

      <a id="clear" class="button" data-toggle="modal" data-target="#clearCrateModal">
        <i class="fa fa-ban"></i>
         Clear
      </a>

      <a id="delete" class="button">
        <i class="fa fa-trash-o"></i>
         Delete
      </a>

      <div class="btn-group">      
        <button type="button" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-question"></i>
          Help
        </button>
        <ul class="dropdown-menu" style="right: 0;left: auto;">
            <li>
              <a id="help_button" class="dropdown-btn" data-toggle="modal" data-target="#helpModal">
                <i class="fa fa-question"></i>
                 About
              </a>
            </li>
          <li>
            <a id="userguide" href="{{ help_url }}" class="dropdown-btn">
              <i class="fa fa-book"></i>
               User Guide
            </a>
          </li>
        </ul>
      </div>
    </div>

  </div>

</div>
{# end div container #}

<div id="files"></div>

{% include 'metadata.php' %}       

{% include 'help_modal.php' %}   

{% include 'publish_modal.php' %}   

{% include 'create_crate_modal.php' %}   

{% include 'remove_crate_modal.php' %}   

{% include 'rename_item_modal.php' %}   

{% include 'rename_crate_modal.php' %}   

{% include 'add_folder_modal.php' %}   

{% include 'clear_crate_modal.php' %}   

{% include 'delete_crate_modal.php' %}   

{% include 'clear_metadata_modal.php' %}  

{% include 'add_creator_modal.php' %}

{% include 'edit_creator_modal.php' %}

{% include 'add_grant_modal.php' %}

{% include 'edit_activities_modal.php' %}

{% include 'check_crate_modal.php' %}

{% include 'publish_confirm_modal.php' %}

{% include 'javascript_vars.php' %}
