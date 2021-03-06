export default {
  page: 0,
  pages: [{
    title: 'main',
    widgets: [
      [
        'core-widget-client-activity',
        'core-widget-duplicatednames',
        'core-widget-uptime'
      ]
      ,[
        'core-widget-events',
        'core-widget-hardwaremodel',
        'core-widget-hardwaretype'
      ],
      [
        'core-widget-installedmemory',
        'core-widget-newclients',
        'disk-widget-diskreport'
      ],
      [
        'disk-widget-fvstatus',
        'disk-widget-smartstatus',
        'ds-widget-bound'
      ],
      [
        'ds-widget-modifiedcomputernames',
        'b2g-widget',
        'bluetooth-widget-battery'
      ],
      [
        'certificate-widget',
        'crashplan-widget',
        'display-widget-external'
      ],
      [
        'findmymac-widget',
        'installs-widget-pending-apple',
        'installs-widget-pending-munki'
      ],
      [
        'munkireport-widget',
        'timemachine-widget',
        'wifi-widget-networks'
      ]
    ]
  }],
  report_data: {
    loading: false,
    
    inactive_week: 0,
    inactive_month: 0,
    inactive_three_months: 0,
    seen_last_hour: 0,
    seen_last_day: 0,
    seen_last_week: 0,
    seen_last_month: 0
  },
  new_clients: {
    loading: false,
    items: [],
  },
  uptime: {
    loading: false,
    oneweekplus: 0,
    oneweek: 0,
    oneday: 0
  }
}
