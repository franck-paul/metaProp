<?php
/**
 * @brief metaProp, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Franck Paul and contributors
 *
 * @copyright Franck Paul carnet.franck.paul@gmail.com
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */
declare(strict_types=1);

namespace Dotclear\Plugin\metaProp;

use dcCore;
use dcNsProcess;
use dcPage;
use Dotclear\Helper\Html\Html;
use Exception;

class Manage extends dcNsProcess
{
    protected static $init = false; /** @deprecated since 2.27 */
    /**
     * Initializes the page.
     */
    public static function init(): bool
    {
        static::$init = My::checkContext(My::MANAGE);

        return static::$init;
    }

    /**
     * Processes the request(s).
     */
    public static function process(): bool
    {
        if (!static::$init) {
            return false;
        }

        try {
            // ToDo

            dcPage::addSuccessNotice(__('metaProp'));
            dcCore::app()->adminurl->redirect('admin.plugin.' . My::id());
        } catch (Exception $e) {
            dcCore::app()->error->add($e->getMessage());
        }

        return true;
    }

    /**
     * Renders the page.
     */
    public static function render(): void
    {
        if (!static::$init) {
            return;
        }

        dcPage::openModule(__('metaProp'));

        echo dcPage::breadcrumb(
            [
                Html::escapeHTML(dcCore::app()->blog->name) => '',
                __('metaProp')                              => '',
            ]
        );
        echo dcPage::notices();

        // Form

        dcPage::closeModule();
    }
}
