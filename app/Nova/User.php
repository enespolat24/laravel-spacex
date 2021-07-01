<?php

namespace App\Nova;

use App\Models\User as UserModel;
use App\Nova\Resource;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphToMany;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;

class User extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = UserModel::class;
    public static $group = 'Users';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'fullname';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'firstname', 'lastname', 'email',
    ];

    public static function label()
    {
        return __('Users');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Gravatar::make(),

            Text::make('Name', function () {
                return $this->fullname;
            })->onlyOnIndex()->sortable(),

            Text::make('Firstname')->sortable()->rules('required', 'max:255')->hideFromIndex(),

            Text::make('Lastname')->sortable()->rules('required', 'max:255')->hideFromIndex(),

            Text::make('Email')->sortable()->rules('required', 'email', 'max:254')->creationRules('unique:users,email')->updateRules('unique:users,email,{{resourceId}}'),

            Boolean::make('Is Active'),

            Password::make('Password')->onlyOnForms()->creationRules('required', 'string', 'min:6')->updateRules('nullable', 'string', 'min:6'),

            Text::make('City ID')->hideFromIndex(),
            DateTime::make('Banned At')->hideFromIndex(),

            DateTime::make('Created At')->exceptOnForms(),
            DateTime::make('Updated At')->onlyOnDetail(),

            Boolean::make('Has email subcription', 'has_email_subscription'),

            Boolean::make('Has notification subcription', 'has_notification_subscription'),

            Boolean::make('Is Active'),

            // Impersonate::make($this),
            MorphToMany::make('Roles', 'roles', \Epigra\Sapiens\Nova\Role::class),
            MorphToMany::make('Permissions', 'permissions', \Epigra\Sapiens\Nova\Permission::class),
            // MorphMany::make('Activities', 'actions', ActivityLog::class),
            // BelongsToMany::make('Groups', 'groups', UserGroup::class),
            // MorphMany::make('Friends', 'friends', Friendship::class),
            // HasMany::make('Likes'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            // new \Cog\Laravel\Nova\Ban\Actions\Ban(),
            // new \Cog\Laravel\Nova\Ban\Actions\Unban(),
            new \Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel(),
        ];
    }
}
